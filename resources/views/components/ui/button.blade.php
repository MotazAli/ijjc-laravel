
@props([
    'text' => ''
])

<button
{{--    x-data="{showLoading: false , buttonClickHandler() {this.showLoading= true}}"--}}
    class="w-full text-white bg-primary-600 disabled:hover:bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
{{--        x-on:click="$event.target.form.submit(); buttonClickHandler();"--}}
    x-bind:disabled="isSubmitted "
    type="submit"
    value="submit">

    <span x-show="isSubmitted ">
        <x-ui.spinner class="w-6 h-6"/>
    </span>
    <span x-show="!isSubmitted " >
        {{ $text }}
    </span>

</button>
