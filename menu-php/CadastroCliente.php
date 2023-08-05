<br>
<h1 class="container">Cadastro do Cliente</h1>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link bg-success" data-bs-toggle="tab" aria-current="page" href="#home">
                <img src="./images/icone/add.png" style="width: 20px;" alt="">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-dark" data-bs-toggle="tab"  href="#menu1">Lista</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" data-bs-toggle="tab"  href="#menu2">Editar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" data-bs-toggle="tab">Disabled</a>
        </li>
    </ul>
</div>

<!-- ---cadastro-Tab ---- -->
<section class = "tab-content">

    <!-- ---cadastro-Tab1 ---- -->
    <div id="home" class="container tab-pane fade" >
        <form class="container-sm" method="GET" action="">

            <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                    <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="Segundo nome">
                </div>
                <div class="col mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sobrenome:</label>
                    <input type="text" class="form-control" placeholder="Ultimo nome" aria-label="Last name">
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>

            <div class="row g-3 mb-3">
                <div class="col-sm-10">
                    <label for="inputAddress" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" placeholder="Rua Fulano de ..." aria-label="City">
                </div>
                <div class="col-sm">
                    <label for="inputAddress" class="form-label">Numero:</label>
                    <input type="text" class="form-control" placeholder="999" aria-label="State">
                </div>
            </div>



            <div class="row g-3 mb-3">
                <div class="col-sm-7">
                    <label for="inputAddress" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" placeholder="Hortolândia" aria-label="City">
                </div>
                <div class="col-sm">
                    <label for="inputAddress" class="form-label">Estado:</label>
                    <input type="text" class="form-control" placeholder="São Paulo" aria-label="State">
                </div>
                <div class="col-sm">
                    <label for="inputAddress" class="form-label">Cep:</label>
                    <input type="text" class="form-control" placeholder="13188-000" aria-label="Zip">
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>


<!-- ---cadastro-Tab2 ---- -->
    <div id="menu1" class="container tab-pane active">
        <h2>TAB2 test table</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
            </tbody>
        </table> 
    </div>

<!-- ---cadastro-Tab3 ---- -->
    <div id="menu2" class="container tab-pane fade">
        <h1>TAB3</h1>
    </div>

</section>

<!-- Script para mudar a cor o botão do menu -->
<script>
    document.getElementById("Cliente").style.backgroundColor = "#7B1111";
</script>

<script>
    let element;
</script>