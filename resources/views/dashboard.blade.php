<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de treino</title>
    <link rel="stylesheet" href="{{asset('css/dash/treino.css')}}" />
</head>
<body>
    <header>
        <section>
            <picture>
                <img src="{{asset('img/logo/sidechest90.png')}}" alt="Logo" />
            </picture>
            <h1> Side Chest'o</h1>
        </section> 
        <div>
            <h1>Área do Profissional</h1>
        </div>
    </header>
    <main>
        <table>
            <h1>Criação de treino</h1>
            <tr>
                <td>Nome do aluno:</td>
                <td><input type="text" name="nome" size="20"> <br /></td>
            </tr>
            <tr>
                <td>Quantidade de exercícios:</td>
                <td>
                <select name="exercicios">
                    <option value="valor1" selected>1</option>
                    <option value="valor2">2</option>
                    <option value="valor3">3</option>
                    <option value="valor4">4</option>
                    <option value="valor5">5</option>
                    <option value="valor6">6</option>
                    <option value="valor7">7</option>
                    <option value="valor8">8</option>
                    <option value="valor9">9</option>
                    <option value="valor10">10</option>
                    <option value="valor11">11</option>
                    <option value="valor12">12</option>
                    <option value="valor13">13</option>
                    <option value="valor14">14</option>
                    <option value="valor15">15</option>
                    <option value="valor16">16</option>
                </select>
                </td>
            </tr>
            <tr>
            <td>Tempo de descanso:</td>
                <td>
                <select name="descanso">
                    <option value="valor1" selected>30 Segundos</option>
                    <option value="valor2">45 Segundos</option>
                    <option value="valor3">1:30 segundos</option>
                    <option value="valor4">2:00 minutos</option>
                    <option value="valor5">Drop set</option>      
                </select>
                </td>
            </tr>
            <tr>
                <td>Exercícios:</td>
                <td>
                    <textarea rows="10" cols="30"> </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button>Criar</button>
                </td>
            </tr>
        </table>
    </main>
    <footer>
        <h3>Side Chest'o</h3>
        <h5>Classic Bodybuilding</h5>
    </footer>
</body>
</html>
