{{-- resources/views/filament/pages/quick-menu-print.blade.php --}}
<x-filament-panels::page>
<style>
.qmp-intro {
    text-align: center;
    color: rgb(107 114 128);
    font-size: 0.875rem;
    margin-bottom: 2.5rem;
}
.dark .qmp-intro { color: rgb(156 163 175); }

.qmp-grid {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
    padding: 1rem 0 3rem;
}

.qmp-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
    padding: 2.5rem 3rem;
    background: white;
    border: 1.5px solid rgb(229 231 235);
    border-radius: 1rem;
    text-decoration: none;
    color: rgb(17 24 39);
    font-weight: 600;
    font-size: 1.0625rem;
    min-width: 210px;
    cursor: pointer;
    transition: border-color 0.15s, background 0.15s, box-shadow 0.15s, transform 0.12s;
}
.qmp-card:hover {
    border-color: #f59e0b;
    background: #fffbeb;
    box-shadow: 0 4px 24px rgba(245,158,11,0.15);
    transform: translateY(-2px);
    color: rgb(17 24 39);
    text-decoration: none;
}
.dark .qmp-card {
    background: rgb(31 41 55);
    border-color: rgb(55 65 81);
    color: rgb(249 250 251);
}
.dark .qmp-card:hover {
    border-color: #f59e0b;
    background: rgb(41 51 65);
}

.qmp-icon {
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
.qmp-icon-food {
    background: rgb(254 243 199);
    color: rgb(180 83 9);
}
.qmp-icon-drinks {
    background: rgb(219 234 254);
    color: rgb(29 78 216);
}
.dark .qmp-icon-food {
    background: rgba(245,158,11,0.15);
    color: #f59e0b;
}
.dark .qmp-icon-drinks {
    background: rgba(59,130,246,0.15);
    color: #60a5fa;
}

.qmp-label {
    line-height: 1.3;
    text-align: center;
}

.qmp-sublabel {
    font-size: 0.75rem;
    font-weight: 400;
    color: rgb(107 114 128);
    line-height: 1.4;
    text-align: center;
}
.dark .qmp-sublabel { color: rgb(156 163 175); }

.qmp-url-hint {
    text-align: center;
    margin-top: 2rem;
    font-size: 0.75rem;
    color: rgb(156 163 175);
}
.qmp-url-hint code {
    background: rgb(243 244 246);
    padding: 0.125rem 0.375rem;
    border-radius: 0.25rem;
    font-size: 0.7rem;
}
.dark .qmp-url-hint code {
    background: rgb(31 41 55);
    color: rgb(209 213 219);
}
</style>

<p class="qmp-intro">
    One-click PDF download — same style as the original Angular menu generator.
</p>

<div class="qmp-grid">

    {{-- Food Menu --}}
    <a href="{{ route('admin.legacy-food-menu') }}" target="_blank" class="qmp-card">
        <span class="qmp-icon qmp-icon-food">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
        </span>
        <span class="qmp-label">Food Menu</span>
        <span class="qmp-sublabel">Single column · DE / IT / EN<br>Allergen icons + legend</span>
    </a>

    {{-- Drinks Menu --}}
    <a href="{{ route('admin.legacy-drinks-menu') }}" target="_blank" class="qmp-card">
        <span class="qmp-icon qmp-icon-drinks">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15M14.25 3.104c.251.023.501.05.75.082M19.8 15a2.25 2.25 0 01-2.15 1.5H6.35A2.25 2.25 0 014.2 15m15.6 0H4.2" />
            </svg>
        </span>
        <span class="qmp-label">Drinks Menu</span>
        <span class="qmp-sublabel">2 columns · Compact<br>No descriptions</span>
    </a>

</div>

<p class="qmp-url-hint">
    This page is hidden from the navigation. Bookmark:
    <code>{{ url('/admin/quick-menu-print') }}</code>
</p>

</x-filament-panels::page>
