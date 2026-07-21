<x-layout>

    @push('css')
        <style>
            h1 {
                color: rebeccapurple;
            }
        </style>
    @endpush

    <h1 class="text-4xl text-center mt-20">This is welcome page</h1>

    <section>
        <div class="container">
            <input type="text" name="" id="dob" class="border w-[40%] px-2 py-1">
        </div>
    </section>


    <section>
        <div class="container">
            <h2>Hello</h2>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Hello</h2>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Hello</h2>
        </div>
    </section>

    <script>
        NepaliCalendar.attach('#dob', {
            lang: 'ne', // 'ne' Nepali script, or 'en'
            nepaliDigits: true,
            hiddenInputName: 'dob_ad', // auto-created hidden field, holds the AD value
            onSelect: function(result) {
                console.log(result.bsFormatted); // e.g. "२०८२ श्रावण १५"
                console.log(result.adFormatted); // e.g. "2025-07-30"
            }
        });
    </script>

</x-layout>
