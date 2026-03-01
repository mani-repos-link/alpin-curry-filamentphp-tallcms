#!/bin/bash

# Peaky - Docker Container Helper for Laravel
# Quick and memorable commands for common development tasks
#
# Common usage:
#   ./peaky.sh                        # Interactive bash
#   ./peaky.sh art make:controller X  # Run artisan commands
#   ./peaky.sh cc                     # Clear all caches
#   ./peaky.sh migrate                # Run migrations
#   ./peaky.sh test                   # Run tests
#   ./peaky.sh test-mail              # Test email
#   ./peaky.sh set-origin news/it news/de  # Run build scripts
#   ./peaky.sh help                   # Show all commands
#
# Run './peaky.sh help' for full list of commands

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Get the directory where this script is located
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_DIR="$SCRIPT_DIR"
# Load environment variables from .env file
ENV_FILE="$PROJECT_DIR/.env"

if [ ! -f "$ENV_FILE" ]; then
    echo -e "${RED}Error: .env file not found at $ENV_FILE${NC}"
    echo -e "${YELLOW}Please copy .env.example to .env and configure it.${NC}"
    exit 1
fi

# Source the .env file to get APP_SERVICE_NAME
export $(grep -v '^#' "$ENV_FILE" | grep APP_SERVICE_NAME | xargs)

if [ -z "$APP_SERVICE_NAME" ]; then
    echo -e "${RED}Error: APP_SERVICE_NAME not found in .env file${NC}"
    exit 1
fi

# Check if we are inside a container
if [ -f /.dockerenv ]; then
    echo -e "${BLUE}(Running in container mode)${NC}"
    CMD_PREFIX="" # Commands run directly
    CONTAINER_NAME="$APP_SERVICE_NAME" # For 'test-mail' subject
else
    echo -e "${BLUE}(Running in host mode)${NC}"
    CONTAINER_NAME="$APP_SERVICE_NAME"
    # Check if container is running
    if ! docker ps --format '{{.Names}}' | grep -q "^${CONTAINER_NAME}$"; then
        echo -e "${RED}Error: Container '$CONTAINER_NAME' is not running${NC}"
        echo -e "${YELLOW}Start your containers with: docker compose up -d${NC}"
        exit 1
    fi
    # Set the command prefix for host mode
    CMD_PREFIX="docker exec -it $CONTAINER_NAME"
fi

# Handle special commands
case "$1" in
    "")
        # No arguments - start interactive session
        echo -e "${GREEN}Starting interactive bash session...${NC}"
        $CMD_PREFIX bash # there could sh too or other shell if installed
        ;;

    "--interactive"|"-i")
        # Interactive mode explicitly requested
        # if already in container, message
        echo -e "${GREEN}Starting interactive bash session...${NC}"
        $CMD_PREFIX bash
        ;;

    # Laravel/shortcuts
    "art"|"artisan")
        shift
        echo -e "${GREEN}Running artisan command...${NC}"
        $CMD_PREFIX php artisan "$@"
        ;;

    "tinker")
        echo -e "${GREEN}Starting Tinker...${NC}"
        $CMD_PREFIX php artisan tinker
        ;;

    "cache-clear"|"cc"|"clear-all")
        echo -e "${GREEN}Clearing all caches and optimizations...${NC}"
        $CMD_PREFIX php artisan optimize:clear
        $CMD_PREFIX php artisan cache:clear
        $CMD_PREFIX php artisan config:clear
        $CMD_PREFIX php artisan route:clear
        $CMD_PREFIX php artisan view:clear
        $CMD_PREFIX php artisan clear
        $CMD_PREFIX php please stache:clear
        $CMD_PREFIX php please stache:refresh
        $CMD_PREFIX php please stache:clear
        $CMD_PREFIX php artisan clear
        echo -e "${GREEN}✓ All caches and optimizations cleared!${NC}"
        ;;


    "npm-dev")
        echo -e "${GREEN}Starting Vite dev server...${NC}"
        $CMD_PREFIX npm run dev
        ;;

    "npm-build")
        echo -e "${GREEN}Building assets...${NC}"
        $CMD_PREFIX npm run build
        ;;

    # Build Scripts
    "set-origin")
        shift
        if [ $# -lt 2 ]; then
            echo -e "${RED}Error: Missing arguments${NC}"
            echo -e "${YELLOW}Usage: $0 set-origin <destDir> <originDir> [key]${NC}"
            echo -e "${YELLOW}Example: $0 set-origin news/it news/de legacyid${NC}"
            exit 1
        fi
        echo -e "${GREEN}Running setOrigin script...${NC}"
        $CMD_PREFIX node .scripts/build-scripts/setOrigin.js "$@"
        ;;

    "set-list-values")
        shift
        if [ $# -lt 2 ]; then
            echo -e "${RED}Error: Missing arguments${NC}"
            echo -e "${YELLOW}Usage: $0 set-list-values <dir> <keys>${NC}"
            echo -e "${YELLOW}Example: $0 set-list-values news/de filter_topic,filter_group${NC}"
            exit 1
        fi
        echo -e "${GREEN}Running setListValues script...${NC}"
        $CMD_PREFIX node .scripts/build-scripts/setListValues.js "$@"
        ;;

    # Utilities
    "test-mail")
        echo -e "${BLUE}Testing email functionality...${NC}"
        echo -e "${YELLOW}Sending test email to dev@kreatif.it${NC}"
        $CMD_PREFIX php artisan tinker --execute="Mail::raw('Hello World! This is a test email from $APP_SERVICE_NAME', function(\$msg) { \$msg->to('dev@kreatif.it')->subject('Test Email from $APP_SERVICE_NAME'); });"
        echo -e "${GREEN}Test email sent! Check your inbox at dev@kreatif.it${NC}"
        ;;

    "logs")
        shift
        if [ -z "$1" ]; then
            echo -e "${GREEN}Showing last 50 lines of Laravel log...${NC}"
            $CMD_PREFIX tail -n 50 storage/logs/laravel.log
        else
            echo -e "${GREEN}Showing last $1 lines of Laravel log...${NC}"
            $CMD_PREFIX tail -n "$1" storage/logs/laravel.log
        fi
        ;;

    "logs-follow"|"lf")
        echo -e "${GREEN}Following Laravel log (Ctrl+C to stop)...${NC}"
        $CMD_PREFIX tail -f storage/logs/laravel.log
        ;;

    "help"|"--help"|"-h")
        # Show help
        echo -e "${GREEN}═══════════════════════════════════════════════════════${NC}"
        echo -e "${GREEN}  Peaky - Docker Container Helper for Laravel${NC}"
        echo -e "${GREEN}═══════════════════════════════════════════════════════${NC}"
        echo ""
        echo -e "${BLUE}BASIC USAGE:${NC}"
        echo -e "  $0 [command] [arguments]"
        echo ""
        echo -e "${BLUE}INTERACTIVE:${NC}"
        echo -e "  ${YELLOW}(no args)${NC}        Start interactive bash session"
        echo -e "  ${YELLOW}-i, --interactive${NC}  Same as above"
        echo ""
        echo -e "${BLUE}ASSETS:${NC}"
        echo -e "  ${YELLOW}npm-dev${NC}              Start Vite dev server"
        echo -e "  ${YELLOW}npm-build${NC}            Build production assets"
        echo ""
        echo -e "${BLUE}BUILD SCRIPTS:${NC}"
        echo -e "  ${YELLOW}set-origin${NC}       Update origin references in content"
        echo -e "                   Usage: set-origin <destDir> <originDir> [key]"
        echo -e "  ${YELLOW}set-list-values${NC}  Convert CSV to YAML lists"
        echo -e "                   Usage: set-list-values <dir> <keys>"
        echo ""
        echo -e "${BLUE}UTILITIES:${NC}"
        echo -e "  ${YELLOW}test-mail${NC}        Send test email to dev@kreatif.it"
        echo -e "  ${YELLOW}logs [n]${NC}         Show last n lines of log (default: 50)"
        echo -e "  ${YELLOW}lf, logs-follow${NC}  Follow log file in real-time"
        echo ""
        echo -e "${BLUE}EXAMPLES:${NC}"
        echo "  $0                                    # Interactive bash"
        echo "  $0 art make:controller PostController # Create controller"
        echo "  $0 cc                                 # Clear all caches"
        echo "  $0 composer require package/name      # Install package"
        echo "  $0 test                               # Run tests"
        echo "  $0 set-origin news/it news/de         # Update origins"
        echo "  $0 logs 100                           # Show last 100 log lines"
        echo ""
        ;;

    *)
        # Execute the provided command
        echo -e "${GREEN}Executing in container: $CONTAINER_NAME${NC}"
        $CMD_PREFIX "$@"
        ;;
esac
