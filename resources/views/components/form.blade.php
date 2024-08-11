<form method="{{ strtoupper($method) === 'GET' ? 'GET' : 'POST' }}" action="{{ $action }}" {{ $attributes }}>
    @csrf
    @method($method)
    {{ $slot }}
</form>
</form>