<div>
    <div class="d-flex gap-5 align align-items-end">
        <h1>Lobby: {{ $lobby->code }}</h1>
        <h4>Vytvořil: {{ $lobby->owner->name }}</h4>

    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hráč</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                </tr>
            </tbody>
        </table>
    </div>


</div>
