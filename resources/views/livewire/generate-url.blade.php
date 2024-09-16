<div class="relative z-50 flex flex-col gap-4">
    {{-- Form untuk input nama tamu --}}
    <input type="text" wire:model="name" placeholder="Nama Tamu" required class="w-full py-2 text-white bg-transparent border-b-2 border-white focus:border-white focus:outline-none">
    <button wire:click="generateUrl" class="px-4 py-2 text-xl font-semibold text-white bg-secondary hover:opacity-90 rounded-xl font-montserrat">Generate URL</button>
</div>

@script
    <script>
        $wire.on('urlGenerated', url => {
            // Menyalin URL ke clipboard
            navigator.clipboard.writeText(url);
            alert('URL berhasil disalin ke clipboard!');
        });
    </script>
@endscript
