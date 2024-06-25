<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>List of clients:</p>
                    <br>
                    <table style="border: 1px solid gray; width: 100%;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid gray;">ID</th>
                                <th style="border: 1px solid gray; ">Redirect</th>
                                <th style="border: 1px solid gray;">Secret</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td style="border: 1px solid gray;">{{ $client->id }}</td>
                                    <td style="border: 1px solid gray;">{{ $client->redirect }}</td>
                                    <td style="border: 1px solid gray;">{{ $client->secret }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3 p-6 bg-white border-b border-gray-200">
                    <form action="/oauth/clients" method="POST">
                        <div>
                            <x-label for="name">Name</x-label>
                            <x-input type="text" name="name" placeholder="Client name"></x-input>
                        </div>
                        <div class="mt-2">
                            <x-label for="redirect">Redirect</x-label>
                            <x-input type="text" name="redirect" placeholder="www.example.com"></x-input>
                        </div>
                        <div class="mt-3">
                            @csrf
                            <button type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>