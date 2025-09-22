<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastros</title>
    <style>
        body {
            background-color: #1e3a8a;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        h2 {
            color: white;
            margin: 30px 0 20px 0;
        }
        
        label {
            display: block;
            margin: 15px 0 5px 0;
            color: white;
        }
        
        input[type="text"], input[type="number"], select {
            width: 300px;
            padding: 8px;
            border: none;
            margin-bottom: 10px;
        }
        
        .caixinha {
            border: 2px solid white;
            padding: 15px;
            margin: 15px 0;
        }
        
        .opcao {
            margin: 8px 0;
            display: flex;
            align-items: center;
        }
        
        input[type="checkbox"], input[type="radio"] {
            margin-right: 8px;
        }
        
        .opcao label {
            display: inline;
            margin: 0;
        }
        
        button {
            background-color: #f97316;
            color: white;
            padding: 10px 20px;
            border: none;
            margin: 10px 5px;
        }
    </style>
</head>
<body>
    <h1>Sistema de Cadastros</h1>
    
    <h2>Cadastro de Professores</h2>
    
    <form action="checkbox.php" method = "post">
        <label>Nome do Professor:</label>
        <input type="text" name="nomeProfessor">
        
        <div class="caixinha">
            <label>Matérias que leciona:</label>
            <div class="opcao">
                <input type="checkbox" name="ds" value="Desenvolvimento de Sistemas">
                <label>Desenvolvimento de Sistemas</label>
            </div>
            <div class="opcao">
                <input type="checkbox" name="mc" value="Mecatrônica">
                <label>Mecatrônica</label>
            </div>
            <div class="opcao">
                <input type="checkbox" name="au" value="Automação">
                <label>Automação</label>
            </div>
        </div>
        
        <div class="caixinha">
            <label>Turnos de trabalho:</label>
            <div class="opcao">
                <input type="checkbox" name="turnomanha" value="Manhã">
                <label>Manhã</label>
            </div>
            <div class="opcao">
                <input type="checkbox" name="turnotarde" value="Tarde">
                <label>Tarde</label>
            </div>
            <div class="opcao">
                <input type="checkbox" name="turnonoite" value="Noite">
                <label>Noite</label>
            </div>
        </div>
        
        <button type="submit">Cadastrar Professor</button>
    </form>
    
    <h2>Cadastro de Matéria</h2>
    
    <form action="materias.php" method = "post">
        <label>Matéria:</label>
        <input type="text" name="materia">
        
        <label>Carga Horária Total (horas):</label>
        <input type="number" name="cargahoraria">
        

        <label>Mês de Início:</label>
        <select name="mesinicio">
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        
        <label>Mês de Fim:</label>
        <select name="mesfim">
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        
        <div class="caixinha">
            <label>Nível de Prioridade:</label>
            <div class="opcao">
                <input type="radio" name="prioridade" value="1">
                <label>N1</label>
            </div>
            <div class="opcao">
                <input type="radio" name="prioridade" value="2">
                <label>N2</label>
            </div>
            <div class="opcao">
                <input type="radio" name="prioridade" value="3">
                <label>N3</label>
            </div>
        </div>
        
        <button type="submit">Cadastrar Matéria</button>
    </form>
</body>
</html>