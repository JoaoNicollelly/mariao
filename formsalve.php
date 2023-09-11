<form method="POST" action="processainscricao.php" enctype="multipart/form-data">

<Label> Nome: </label>

<input type="text" name="nome"><br><br>

<label> CPF: </label>

<input type="text" name="CPF" size="33" required 
                                        pattern="\d{3}\.\d{3}\.\d{3}\.-\d{2}"
                                        placeholder="123.456.789.00">

<label> RG: </label>
<input type="text" name="RG" size="1" required minlength="5" maxlength="40">

<label> Data de Nascimento: </label>
<input type="datetime-local" name="datadenascimento" size="1" value="now()" min="1960-06-07T00:00" required>

<label>Endereço:</label>
<input type="text" name="endereco" size="1" required minlength="5" maxlength="40">

<label> Bairro: </label>
<input type="text" name="bairro" size="1" required minlength="5" maxlength="40">

<label> Municipio:</label>
<input type="text" name="municipio" size="1" required minlength="5" maxlength="40">

<label> E-mail:</label>
<input type="email" name="email" size="1" required minlength="5" maxlength="40"><br><br>

<label> Telefone: </label>
<input type="tel" name="fone" size="13" required
                                            pattern="[0-9]{2} [0-9]{4} [0-9]{4}"
                                            placeholder="11 99999-9999">

<label> Telefone para recado:</label>
<input type="text" name="tell" size="1" required minlength="5" maxlength="40">

<label> Nome para recado: </label>
<input type="text" name="nomerecado" size="1" required minlength="5" maxlength="40">

</select>

<input type="submit" value="Salvar">

</form>