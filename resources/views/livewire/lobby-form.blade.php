<x-form action="/" method="POST" wire:submit="join">
    <h1>Připojit se do místnosti</h1>
        <div class="my-5">
            <label for="lobby" class="form-label">Číslo místnosti</label>
            <input
                type="text"
                class="form-control @error('lobby') is-invalid @enderror"
                name="lobby"
                id="lobby"
                aria-describedby="helpId"
                placeholder=""
                style="font-size: 2.5rem"
                wire:model="lobby"
            />
            @error('lobby')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class=" row justify-content-center">
            <button class="btn btn-primary col-6 py-3" style="font-size: 1.5rem" type="submit">Připojit se</button>
        </div>
    <a href="{{ route('get.user.login')}}"><small class="mx-auto row justify-content-center mt-1 text-decoration-underline cursor-pointer">Portál vyučujícího</small></a>

    </x-form>