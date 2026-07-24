<x-layout>

    <section>
        <div class="container py-16">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl text-center mb-8">Course Edit</h1>
                <a href="/courses" class="bg-[purple] text-white px-6 py-2 rounded-full">go back</a>
            </div>

            <form action="/course/update/{{ $course->id }}" method="post">
                @csrf
                @method("patch")
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="course_name">Course Name</label>
                        <input type="text" name="course_name" id="course_name" class="border px-1 py-2 w-full"
                            value="{{ $course->name }}">
                    </div>

                    <div>
                        <label for="price">Course Price</label>
                        <input type="number" name="price" id="price" class="border px-1 py-2 w-full"
                            value="{{ $course->price }}">
                    </div>

                    <div class="col-span-2">
                        <label for="description">Course Description</label>
                        {{-- <input type="text" name="course_name" id="course_name" class="border px-1 py-2 w-full"> --}}
                        <textarea name="description" id="description" rows="4" class="border px-1 py-2 w-full">{{ $course->description }}</textarea>
                    </div>
                </div>


                <button type="submit" class="bg-[green] px-5 py-2 rounded-md text-white">Save Record</button>
            </form>
        </div>
    </section>
</x-layout>
