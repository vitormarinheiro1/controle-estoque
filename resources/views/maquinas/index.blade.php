<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Máquinas Ativas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-primary-button class="mt-4 mb-4">
                <a href="{{ route('maquinas.create') }}">Adicionar máquina</a>
            </x-primary-button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full bg-gray-800 text-white table-auto rounded-lg shadow-lg">
                        <thead class="bg-gray-700 text-gray-100">
                            <tr>
                                <th class="px-4 py-2 border text-left" scope="col">#</th>
                                <th class="px-4 py-2 border text-left" scope="col">Colaborador</th>
                                <th class="px-4 py-2 border text-left" scope="col">Departamento</th>
                                <th class="px-4 py-2 border text-left" scope="col">Hostname</th>
                                <th class="px-4 py-2 border text-left" scope="col">IP</th>
                                <th class="px-4 py-2 border text-left" scope="col">Mac Address</th>
                                <th class="px-4 py-2 border text-left" scope="col">Observação</th>
                                <th class="px-4 py-2 border text-left" scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($maquinas as $maquina)
                                <tr class="hover:bg-gray-700">
                                    <th class="px-4 py-2 border text-left" scope="row">{{ $loop->iteration }}</th>
                                    <td class="px-4 py-2 border text-left">{{ $maquina->colaborador }}</td>
                                    <td class="px-4 py-2 border text-left">{{ $maquina->departamento }}</td>
                                    <td class="px-4 py-2 border text-left">{{ $maquina->hostname }}</td>
                                    <td class="px-4 py-2 border text-left">{{ $maquina->ip }}</td>
                                    <td class="px-4 py-2 border text-left">{{ $maquina->mac_address }}</td>
                                    <td class="px-4 py-2 border text-left">{{ $maquina->observacao }}</td>
                                    <td class="px-4 py-2 border text-left">
                                        <span class="flex">
                                            <a href="{{ route('maquinas.edit', $maquina->id) }}" class="text-yellow-500">
                                                Editar
                                            </a>
                                            <form action="{{ route('maquinas.destroy', $maquina->id)}}" method="post"
                                                class="ms-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600">Excluir</button>
                                            </form>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>