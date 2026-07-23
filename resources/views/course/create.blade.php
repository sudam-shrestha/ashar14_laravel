<x-layout>

    <section>
        <div class="container py-16">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl text-center mb-8">Course Create</h1>
                <a href="/courses" class="bg-[purple] text-white px-6 py-2 rounded-full">go back</a>
            </div>

            <form action="/save-course" method="post">
                @csrf

                {{-- <label for="name">Enter your name</label>
                <input type="text" name="name" id="name" value="Ram Bahadur" class="border px-1 py-2 w-full" required >

                <label for="age">Enter your age</label>
                <input type="number" name="age" id="age" placeholder="eg.25" class="border px-1 py-2 w-full" required>

                <label for="dob">DOB</label>
                <input type="date" name="dob" id="dob" class="border px-1 py-2 w-full" required>

                <label for="">Tme</label>
                <input type="time" name="" id="" class="border px-1 py-2 w-full">
                <input type="email" name="" id="" class="border px-1 py-2 w-full">
                <input type="password" name="" id="" class="border px-1 py-2 w-full">

                <label for="course">Select Course</label>
                <select name="course" id="course" class="border px-1 py-2 w-full">
                    <option value="laravel">laravel</option>
                    <option value="react">react</option>
                    <option value="nodejs">Node</option>
                </select> --}}

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="course_name">Course Name</label>
                        <input type="text" name="course_name" id="course_name" class="border px-1 py-2 w-full">
                    </div>

                    <div>
                        <label for="price">Course Price</label>
                        <input type="number" name="price" id="price" class="border px-1 py-2 w-full">
                    </div>

                    <div class="col-span-2">
                        <label for="description">Course Description</label>
                        {{-- <input type="text" name="course_name" id="course_name" class="border px-1 py-2 w-full"> --}}
                        <textarea name="description" id="description" rows="4" class="border px-1 py-2 w-full"></textarea>
                    </div>
                </div>


                <button type="submit" class="bg-[green] px-5 py-2 rounded-md text-white">Save Record</button>
            </form>
        </div>
    </section>
</x-layout>
