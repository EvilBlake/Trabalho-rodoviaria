<!DOCTYPE html>
<html>
<head>
    <title>Como fazer input de password com olho de mostrar senha</title>
    <!-- lib de icons -->
    <link rel="stylesheet" type="text/css" href="entrar.css">
    <link rel="stylesheet" type="text/css"href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<body>
      <main>
      <h1><div style='text-align:right'>Login </div> </h1>

        <form action="../controller/auth.php" method="post">

            <label for="email">
                <span>Email</span>
            <div>
                <input type="email" id="email" name="email">
            </div>
            </label>

            <label for="password">
                <span>Senha</span>
                <div>
                <input type="password" id="password" name="senha">
                <span class="lnr lnr-eye"></span>
            </div>
            </label>
 <a href="cadastrar.php" id="Cc">Criar conta</a>
        <h2>
            <input type="submit" value="Entrar" id="button" name="entrar">
        </h2>
    </form>
     </main>
    <section class="images">
        <div class="circle"></div>
    </section>
</body>
<script type="text/javascript">
let btn = document.querySelector('.lnr-eye');
btn.addEventListener('click', function() {
let input = document.querySelector('#password');
if(input.getAttribute('type') == 'password') {
input.setAttribute('type', 'text');
} else {
input.setAttribute('type', 'password');
    }
});
</script>
</html>