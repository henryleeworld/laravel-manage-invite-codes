<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Invitation Link') }}
        </h2>
    </header>
    <div>
        <x-input-label for="invitation_link" :value="__('Invitation Link')" />
        <div class="relative text-gray-700">
            <x-text-input
                id="invitation_link"
                name="invitation_link"
                type="text"
                class="w-full h-10 pl-3 pr-8 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline aria-readonly:bg-slate-100"
                :value="old('invitation_link', route('register', ['invite_code' => $inviteCode->code]))"
                aria-readonly="true"
                readonly
            />
            <button class="absolute inset-y-0 right-0 flex items-center px-4 font-bold text-white bg-indigo-600 rounded-r-lg hover:bg-indigo-500 focus:bg-indigo-700]" id="invitation_link_btn" data-clipboard-target="#invitation_link">
                {{ __('Copy') }}
            </button>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('invitation_link')" />
    </div>
</section>
@section('scripts')
@parent
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
<script>
    let link = document.getElementById("invitation_link_btn");
    let clipboard = new ClipboardJS(link);
    clipboard.on("success", function (e) {
        let oldtext = e.trigger.textContent;
        e.trigger.textContent = "{{ __('Copied!') }}";
        setTimeout(() => (e.trigger.textContent = oldtext), 2000);
    });
    clipboard.on("error", function (e) {
        let oldtext = e.trigger.textContent;
        e.trigger.textContent = "{{ __('Copy failed!') }}";
        setTimeout(() => (e.trigger.textContent = oldtext), 2000);
    });
</script>
@endsection
