<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-white font-bold text-2xl mb-6">Adicionar Máquina Ativa</h1>
        <form method="POST" action="{{ route('maquinas.store') }}">
            @csrf
            <div class="py-2">
                <label class="text-white" for="descricao">Colaborador</label>
                <input
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" id="colaborador" name="colaborador" placeholder="Vitor Marinheiro..."
                    @isset($colaborador)value="{{ $colaborador }}"@endisset>

                <label class="text-white" for="departamento">Departamento</label>
                <select
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    name="departamento" aria-label="Default select example">
                    <option selected disabled>Escolha um departamento</option>
                    <option value="Análise Técnica"
                    @isset($departamento) @if($departamento == 'Análise Técnica') selected @endif @endisset>
                    Análise Técnica</option>
                    <option value="Cadastro"
                    @isset($departamento) @if($departamento == 'Cadastro') selected @endif @endisset>
                        Cadastro</option>
                    <option value="Comercial"
                    @isset($departamento) @if($departamento == 'Comercial') selected @endif @endisset>
                        Comercial</option>
                    <option value="Contabilidade/RH"
                    @isset($departamento) @if($departamento == 'Contabilidade/RH') selected @endif @endisset>
                        Contabilidade/RH</option>
                    <option value="Diretoria"
                    @isset($departamento) @if($departamento == 'Diretoria') selected @endif @endisset>
                        Diretoria</option>
                    <option value="Financeiro"
                    @isset($departamento) @if($departamento == 'Financeiro') selected @endif @endisset>
                        Financeiro</option>
                    <option value="Marketing"
                    @isset($departamento) @if($departamento == 'Marketing') selected @endif @endisset>
                        Marketing</option>
                    <option value="Projetos Operacionais"
                    @isset($departamento) @if($departamento == 'Projetos Operacionais') selected @endif @endisset>
                        Projetos Operacionais</option>
                    <option value="SAC"
                    @isset($departamento) @if($departamento == 'SAC') selected @endif @endisset>
                        SAC</option>
                    <option value="Salão de Vendas"
                    @isset($departamento) @if($departamento == 'Salão de Vendas') selected @endif @endisset>
                        Salão de Vendas</option>
                    <option value="TI"
                    @isset($departamento) @if($departamento == 'TI') selected @endif @endisset>
                        TI</option>
                </select>

                <label class="text-white" for="descricao">Hostname</label>
                <input
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" id="hostname" name="hostname" placeholder="DESKTOP-FD912GA"
                    @isset($hostname)value="{{ $hostname }}"@endisset>

                    <label class="text-white" for="descricao">IP</label>
                <input
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" id="ip" name="ip" placeholder="192.168.0.27"
                    @isset($ip)value="{{ $ip }}"@endisset>

                    <label class="text-white" for="descricao">MAC Address</label>
                <input
                    class="mb-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" id="mac_address" name="mac_address" placeholder="F2:A2:G2:A1:G2"
                    @isset($mac_address)value="{{ $mac_address }}"@endisset>

                <label class="text-white" for="observacao">Observação</label>
                    <textarea name="observacao" placeholder="Fazer upgrade ssd..."
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('observacao') }}</textarea>
            </div>
            <x-primary-button class="mt-4">{{ __('Adicionar máquina') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>