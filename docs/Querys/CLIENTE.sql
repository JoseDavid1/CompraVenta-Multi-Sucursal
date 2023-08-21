-- LISTAR TODAS LOS REGISTROS POR SUCURSAL
CREATE PROCEDURE SP_L_CLIENTE_01 
@EMP_ID INT
AS
BEGIN

	SELECT * FROM TM_CLIENTE
	WHERE 
	EMP_ID = @EMP_ID
	AND EST = 1
END




-- LISTAR REGISTRO POR ID
CREATE PROCEDURE SP_L_CLIENTE_02 
@CLI_ID INT
AS
BEGIN

	SELECT * FROM TM_CLIENTE
	WHERE 
	CLI_ID = @CLI_ID
END




-- ELIMINAR REGISTRO 
CREATE PROCEDURE SP_D_CLIENTE_01 
@CLI_ID INT
AS
BEGIN

	UPDATE TM_CLIENTE
	SET
		EST = 0
	WHERE
		CLI_ID = @CLI_ID
END




-- INGRESAR NUEVO REGISTRO
CREATE PROCEDURE SP_I_CLIENTE_01 
@EMP_ID INT,
@CLI_NOM VARCHAR(150),
@CLI_RUC VARCHAR(150),
@CLI_TELF VARCHAR(50),
@CLI_DIRECC VARCHAR(150),
@CLI_CORREO VARCHAR(150)
AS
BEGIN

	INSERT INTO TM_CLIENTE
	(EMP_ID, CLI_NOM, CLI_RUC, CLI_TELF, CLI_DIRECC, CLI_CORREO, FECH_CREA, EST)
	VALUES
	(@EMP_ID, @CLI_NOM, @CLI_RUC, @CLI_TELF, @CLI_DIRECC, @CLI_CORREO, GETDATE(), 1)

END





-- ACTUALIZAR NUEVO REGISTRO
CREATE PROCEDURE SP_U_CLIENTE_01 
@CLI_ID INT,
@EMP_ID INT,
@CLI_NOM VARCHAR(150),
@CLI_RUC VARCHAR(150),
@CLI_TELF VARCHAR(50),
@CLI_DIRECC VARCHAR(150),
@CLI_CORREO VARCHAR(150)
AS
BEGIN

	UPDATE TM_CLIENTE
	SET
		EMP_ID = @EMP_ID,
		CLI_NOM = @CLI_NOM,
		CLI_RUC = @CLI_RUC,
		CLI_TELF = @CLI_TELF,
		CLI_DIRECC = @CLI_DIRECC,
		CLI_CORREO = @CLI_CORREO
	WHERE
		CLI_ID = @CLI_ID

END



