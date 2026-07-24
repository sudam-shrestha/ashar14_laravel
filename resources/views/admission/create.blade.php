<x-layout>

    <section>
        <div class="container py-16">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl text-center mb-8">Admission Create</h1>
                <a href="/admission/index" class="bg-[purple] text-white px-6 py-2 rounded-full">go back</a>
            </div>

            <form action="/save-course" method="post">
                @csrf

                <div class="grid grid-cols-2 gap-6 mb-5">
                    <div>
                        <label for="name">Enter Your Name</label>
                        <input type="text" name="name" id="name" class="border px-1 py-2 w-full">
                    </div>

                    <div>
                        <label for="email">Enter Your Email</label>
                        <input type="email" name="email" id="email" class="border px-1 py-2 w-full">
                    </div>

                    <div>
                        <label for="course">Select Course</label>
                        <input type="text" name="course" id="course" class="border px-1 py-2 w-full">
                    </div>

                </div>


                <button type="submit" class="bg-[green] px-5 py-2 rounded-md text-white">Save Record</button>
            </form>
        </div>
    </section>
</x-layout>
