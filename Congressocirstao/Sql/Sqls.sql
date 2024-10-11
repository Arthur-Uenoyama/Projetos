CREATE SCHEMA `congressocristao`;

USE congressocristao;

CREATE TABLE `congressocristao`.`perfil`(
    `IDPerfil` INT NOT NULL AUTO_INCREMENT,
    `NomeIgreja` varchar(100) NOT NULL,
    `NomePerfil` varchar(100) NOT NULL,
    `CNPJ` varchar(16),
    `Email` varchar(100) NOT NULL,
    `Senha` varchar(255) NOT NULL,
    `ConfirmarSenha` varchar(255) NOT NULL,
    PRIMARY KEY (`IDPerfil`)
);

CREATE TABLE `congressocristao`.`criarevento`(
    `IDCriarEvento` INT NOT NULL AUTO_INCREMENT,
    `NomeEvento` varchar(50) NOT NULL,
    `DataEvento` date,
    `DataFinalEvento` date,
    `ValorInscricao` DECIMAL(10,2) NOT NULL,
    `IgrejaRealizadora` varchar(255) NOT NULL,
    `LocalEvento` varchar(100) NOT NULL,
    `LocalIgreja` varchar(100) NOT NULL,
    `Cidade` varchar(50) NOT NULL,
    `NomePalestrante` varchar(50) NOT NULL,
    `SobrePalestrante` TEXT,
    `FotoPalestrante` varchar(100) NOT NULL,
    `NomeHotel` varchar(50) NOT NULL,
    `FotoHotel` varchar(100) NOT NULL,
    `DataCheckin` date,
    `HorarioCheckin` time,
    `DataCheckout` date,
    `HorarioCheckout` time,
    `Regulamento` TEXT,
    `FotosLocal` varchar(100) NOT NULL,
    `CEP` varchar(10) NOT NULL,
    `CEP2` varchar(10) NOT NULL,
    `EnderecoGoogleMaps` varchar(255) NOT NULL,
    `EnderecoGoogleMaps2` varchar(255) NOT NULL,
    `CodPerfil` INT,
    PRIMARY KEY (`IDCriarEvento`),
    FOREIGN KEY (`CodPerfil`) REFERENCES `perfil` (`IDPerfil`),
    CHECK (`ValorInscricao` >= 0.00 AND `ValorInscricao` <= 10000.00) -- Intervalo de 0 a 10.000 reais
);

CREATE TABLE `congressocristao`.`perfilevento`(
  `PerfilID` INT NOT NULL,
  `EventoID` INT NOT NULL,
  PRIMARY KEY (`PerfilID`, `EventoID`),
  FOREIGN KEY (`PerfilID`) REFERENCES `perfil` (`IDPerfil`),
  FOREIGN KEY (`EventoID`) REFERENCES `criarevento` (`IDCriarEvento`)
);

CREATE TABLE `congressocristao`.`inscricaocasal`(
    `IDInscricaoCasal` INT NOT NULL AUTO_INCREMENT,
    `NomeMarido` varchar(100) NOT NULL,
    `CPFMarido` varchar(16) NOT NULL,
    `NomeEsposa` varchar(100) NOT NULL,
    `CPFEsposa` varchar(16) NOT NULL,
    `DataCasamento` date,
    `CEPEndereco` varchar(12),
    PRIMARY KEY (`IDInscricaoCasal`)
);

CREATE TABLE `congressocristao`.`crianca`(
    `IDCrianca` INT NOT NULL AUTO_INCREMENT,
    `Crianca0a12` varchar(100) NOT NULL,
    `Crianca13a17` varchar(100) NOT NULL,
    `NomeCrianca` varchar(100) NOT NULL,
    `CPFCrianca` varchar(16) NOT NULL,
    `DataNascimento` date,
    `CodCrianca` INT,
    PRIMARY KEY (`IDCrianca`),
    FOREIGN KEY (`CodCrianca`) REFERENCES congressocristao.inscricaocasal (`IDInscricaoCasal`)
);

ALTER TABLE registro ADD ConfirmarSenha VARCHAR(255) NOT NULL;

USE congressocristao;
SELECT evento.* FROM perfil INNER JOIN perfilevento ON perfil.IDPerfil = perfilevento.PerfilID INNER JOIN criarevento evento ON evento.IDCriarEvento = perfilevento.EventoID WHERE perfil.IDPerfil = 1;

DESCRIBE perfilevento;

SELECT * FROM congressocristao.criarevento;

SELECT * FROM congressocristao.perfil;

SELECT * FROM congressocristao.inscricaocasal;

SELECT * FROM congressocristao.crianca;

INSERT INTO `congressocristao`.`perfil` (`NomeIgreja`, `NomePerfil`, `CNPJ`, `Email`, `Senha`, `ConfirmarSenha`)
VALUES ('Igreja dos Caramelos', 'Teste Zavala', '00000000/0001-00', 'Teste@teste.com', 'teste', 'teste');

INSERT INTO `congressocristao`.`criarevento` (
`NomeEvento`,`DataEvento`,`DataFinalEvento`,`ValorInscricao`,`IgrejaRealizadora`,`LocalEvento`,`LocalIgreja`,`Cidade`,`NomePalestrante`,`SobrePalestrante`,`FotoPalestrante`,`NomeHotel`,`FotoHotel`,`DataCheckin`,`HorarioCheckin`,`DataCheckout`,`HorarioCheckout`,`Regulamento`,`FotosLocal`,`CEP`,`CEP2`,`EnderecoGoogleMaps`,`EnderecoGoogleMaps2`,`CodPerfil`) 
VALUES ('Encontro de Ninjas','2023-12-20','2023-12-30',1500.00,'Igreja dos Caramelos','Barretos Country Resort','R. Vinte e Dois, 631 - Centro, Barretos - SP','Barretos','Isa','Palestra sobre teste de um webdev','./img/arte r6.jpg','Country Hotel','./img/barretos-country.jpg','2023-12-20','15:00:00','2023-12-30','17:00:00','Sigas as regras para poder aproveitar esse evento iCaros irmãos em Cristo!
A Igreja Presbiteriana de Araraquara estará promovendo o 2º Encontro de Casais a ser
realizado nos dias *17, 18 e 19 de Novembro de 2023 no Hotel Monte Real Resort em
Águas de Lindóia/SP*.
O preletor será o Dr. Roberto Aylmer, Psiquiatra, Presbítero e Conferencista, PhD,
Médico, Professor e Consultor em lideranças de pessoas no contexto complexo.
*A inscrição é somente para CASAIS, não sendo permitida a
participação e a hospedagem de crianças independentemente da idade
e qualquer outra pessoa, além do casal*.
Investimento de R$ 1.580,22 por casal, podendo ser parcelado conforme
disponibilidade de parcelas no link. No pix em única parcela R$ 1.522,70 o casal.
*Quanto menos parcela, menor o valor do Investimento*.
*No Boleto no valor de R$ 1.503,30 em única parcela*.
O Encontro oferece uma programação leve, num ambiente de muita alegria e amizade,
procurando através do convívio e das palestras proporcionar ao casal a oportunidade
de avaliar seu casamento à luz da vontade de Deus.
- *O valor pago dá direito ao uso de toda a infraestrutura do Hotel, bem como a todas
as refeições nele servidas, a começar do jantar na sexta-feira, dia 17/11/2023*;
- Gastos pessoais como água, sucos ou refrigerantes nas refeições; telefonemas,
frigobar, lavanderia etc... são de responsabilidade exclusiva do casal.
*INCLUSO TODAS AS REFEIÇÕES E CAFÉ DA MANHÃ E UTILIZAÇÃO DE TODAS AS
DEPENDÊNCIAS DO HOTEL*.
Clica no link abaixo ou no folder anexo, devendo preencher os dados e efetivar o
pagamento por cartão de crédito, boleto ou Pix.
Aproveitem e façam as suas inscrições que são vagas limitadas!
*Dúvidas, entre em contato com a Secretária da Igreja Helda pelo 16 997214886*.
*Um investimento que vale a pena*!
','./img/forza5.jpg','14785-100','14780-080','https://maps.app.goo.gl/vw1u4RdFGuTwcBRg9','https://maps.app.goo.gl/PhoqQTX9v7ZGyqSw7',1);

INSERT INTO `congressocristao`. `inscricaocasal`(
`NomeMarido`,`CPFMarido`,`NomeEsposa`,`CPFEsposa`,`DataCasamento`,`CEPEndereco`)
VALUES ('Arthur','094.335.950-33','Isa','127.426.530-40','1998-11-01','77021-688');
