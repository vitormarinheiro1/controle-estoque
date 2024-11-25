<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-white font-bold text-2xl mb-6">Editar Máquina</h1>
        <form method="POST" action="{{ route('maquinas.update', $maquina->id) }}">
            @csrf
            @method('PUT') <!-- Define o método HTTP como PUT para atualização -->
            <div class="py-2">
                <label class="text-white" for="colaborador">Colaborador</label>
                <input
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" id="colaborador" name="colaborador" placeholder="Vitor Marinheiro..."
                    value="{{ old('colaborador', $maquina->colaborador) }}">

                <label class="text-white" for="departamento">Departamento</label>
                <select
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    name="departamento" aria-label="Default select example">
                    <option selected disabled>Escolha um departamento</option>
                    <option value="Análise Técnica" {{ old('departamento', $maquina->departamento) == 'Análise Técnica' ? 'selected' : '' }}>Análise Técnica</option>
                    <option value="Cadastro" {{ old('departamento', $maquina->departamento) == 'Cadastro' ? 'selected' : '' }}>Cadastro</option>
                    <option value="Comercial" {{ old('departamento', $maquina->departamento) == 'Comercial' ? 'selected' : '' }}>Comercial</option>
                    <option value="Contabilidade/RH" {{ old('departamento', $maquina->departamento) == 'Contabilidade/RH' ? 'selected' : '' }}>Contabilidade/RH</option>
                    <option value="Diretoria" {{ old('departamento', $maquina->departamento) == 'Diretoria' ? 'selected' : '' }}>Diretoria</option>
                    <option value="Financeiro" {{ old('departamento', $maquina->departamento) == 'Financeiro' ? 'selected' : '' }}>Financeiro</option>
                    <option value="Marketing" {{ old('departamento', $maquina->departamento) == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                    <option value="Projetos Operacionais" {{ old('departamento', $maquina->departamento) == 'Projetos Operacionais' ? 'selected' : '' }}>Projetos Operacionais</option>
                    <option value="SAC" {{ old('departamento', $maquina->departamento) == 'SAC' ? 'selected' : '' }}>SAC</option>
                    <option value="Salão de Vendas" {{ old('departamento', $maquina->departamento) == 'Salão de Vendas' ? 'selected' : '' }}>Salão de Vendas</option>
                    <option value="TI" {{ old('departamento', $maquina->departamento) == 'TI' ? 'selected' : '' }}>TI</option>
                </select>

                <label class="text-white" for="hostname">Hostname</label>
                <input
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" id="hostname" name="hostname" placeholder="DESKTOP-FD912GA"
                    value="{{ old('hostname', $maquina->hostname) }}">

                <label class="text-white" for="ip">IP</label>
                <input
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" id="ip" name="ip" placeholder="192.168.0.27"
                    value="{{ old('ip', $maquina->ip) }}">

                <label class="text-white" for="mac_address">MAC Address</label>
                <input
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" id="mac_address" name="mac_address" placeholder="F2:A2:G2:A1:G2"
                    value="{{ old('mac_address', $maquina->mac_address) }}">

                <label class="text-white" for="observacao">Observação</label>
                <textarea
                    name="observacao"
                    placeholder="Fazer upgrade ssd..."
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('observacao', $maquina->observacao) }}</textarea>
            </div>
            <x-primary-button class="mt-4">{{ __('Salvar Alterações') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
