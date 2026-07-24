<x-layout>

    <section>
        <div class="container py-16">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl text-center mb-8">Courses</h1>
                <a href="/course/create" class="bg-[purple] text-white px-6 py-2 rounded-full">add new</a>
            </div>

            <table class="w-full text-center">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 border border-gray-300">
                            SN
                        </th>
                        <th class="py-2 border border-gray-300">
                            Name
                        </th>
                        <th class="py-2 border border-gray-300">
                            Price
                        </th>
                        <th class="py-2 border border-gray-300">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td class="border border-gray-300 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-gray-300 py-2">{{ $course->name }}</td>
                            <td class="border border-gray-300 py-2">Rs.{{ $course->price }}/-</td>
                            <td class="border border-gray-300 py-2 flex gap-2 justify-center">
                                <a href="/course/edit/{{$course->id}}">
                                    Edit
                                </a>
                                <form action="/course/delete/{{ $course->id }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
</x-layout>
