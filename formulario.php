<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="">
    <div>
        <h1>Formulário</h1>
        
        <div>
            <fieldset style="width: 60%;"><legend>Dados pessoais</legend>
            <div>
                <label>Nome:</label>
                <input type="text">
            </div>
            <div>
                <br><label>Endereço:</label>
                <input type="text">
            </div>
            <div>
                <br><label>Cidade:</label>
                <input type="text">
            </div>
            <div>
                <br><label>Estado:</label>
                <select>
                    <option>Acre</option>
                    <option>Alagoas</option>
                    <option>Amapá</option>
                    <option>Amazonas</option>
                    <option>Bahia</option>
                    <option>Ceará</option>
                    <option>Distrito Federal</option>
                    <option>Espírito Santo</option>
                    <option>Goiás</option>
                    <option>Maranhão</option>
                    <option>Mato Grosso</option>
                    <option>Mato Grosso do Sul</option>
                    <option>Minas Gerais</option>
                    <option>Pará</option>
                    <option>Paraíba</option>
                    <option>Paraná</option>
                    <option>Pernambuco</option>
                    <option>Piauí</option>
                    <option>Rio de Janeiro</option>
                    <option>Rio Grande do Norte</option>
                    <option>Rio Grande do Sul</option>
                    <option>Rondônia</option>
                    <option>Roraima</option>
                    <option>Santa Catarina</option>
                    <option>São Paulo</option>
                    <option>Sergipe</option>
                    <option>Tocantins</option>
                </select>
            </div>
            </fieldset>
        </div>
        
        <div>
            <h2>Dados profissionais</h2>
            <div id="div2">
                <fieldset style="width: 60%;"><legend>Natureza do Cargo</legend>
                <div>
                    <label><input type="radio" name="cargo"> Gerência</label>
                    <label><input type="radio" name="cargo"> Financeiro</label>
                    <label><input type="radio" name="cargo"> Recepção</label>
                    <label><input type="radio" name="cargo"> Administrativo</label>
                    <label><input type="radio" name="cargo"> Jurídico</label>
                </div>
                
            
            
                <label>Área de interesse</label>
                <div>
                    <label><input type="checkbox"> Computação</label>
                    <label><input type="checkbox"> Biologia</label>
                    <label><input type="checkbox"> Meio Ambiente</label>
                    <label><input type="checkbox"> Engenharia</label>
                    <label><input type="checkbox"> História</label>
                </div>
            
            
                <br><label>Mini-currículo:</label>
                <textarea style="width: 300px;"></textarea><br><br>
            </div>
            </fieldset>
        </div>
        
        <div>
            <br><button>Enviar</button>
            <button>Limpar</button>
        </div>
    </div>
    </form>
</body>
</html>