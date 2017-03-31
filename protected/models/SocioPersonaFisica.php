<?php

/**
 * This is the model class for table "tbl_socios_persona_fisica".
 *
 * The followings are the available columns in table 'tbl_socios_persona_fisica':
 * @property integer $id
 * @property string $nombre
 * @property string $domicilio
 * @property string $curp
 * @property string $rfc
 * @property string $actividades
 * @property string $ubicacion
 * @property string $ciclos
 * @property string $fondos
 * @property string $fecha_inicio
 * @property string $fecha_vigencia
 * @property string $fecha_registro
 * @property string $ciudad
 * @property string $estado
 * @property integer $documentacion_rfc
 * @property integer $documentacion_curp
 * @property integer $documentacion_identificacion
 * @property integer $documentacion_constancia_fondo
 * @property integer $documentacion_acta_asamblea
 * @property integer $documentacion_estudio_viabilidad
 */
class SocioPersonaFisica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_socios_persona_fisica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, domicilio, curp, rfc, actividades, ubicacion, ciclos, fondos, fecha_inicio, fecha_vigencia, fecha_registro, ciudad, estado, documentacion_rfc, documentacion_curp, documentacion_identificacion, documentacion_constancia_fondo, documentacion_acta_asamblea, documentacion_estudio_viabilidad', 'required'),
			array('documentacion_rfc, documentacion_curp, documentacion_identificacion, documentacion_constancia_fondo, documentacion_acta_asamblea, documentacion_estudio_viabilidad', 'numerical', 'integerOnly'=>true),
			array('nombre, domicilio, curp, rfc, ciclos, ciudad', 'length', 'max'=>180),
			array('actividades, fondos', 'length', 'max'=>500),
			array('ubicacion', 'length', 'max'=>300),
			array('estado', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, domicilio, curp, rfc, actividades, ubicacion, ciclos, fondos, fecha_inicio, fecha_vigencia, fecha_registro, ciudad, estado, documentacion_rfc, documentacion_curp, documentacion_identificacion, documentacion_constancia_fondo, documentacion_acta_asamblea, documentacion_estudio_viabilidad', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre:',
			'apellidopaterno' => 'Apellido Paterno',
			'domicilio' => 'Domicilio particular:',
			'curp' => 'Clave Unica de Registro de Población (CURP):',
			'rfc' => 'Registro Federal de Contribuyentes (RFC):',
			'actividades' => 'Naturaleza de las Actividades:',
			'ubicacion' => 'Ubicación de los predios o unidades de explotación:',
			'ciclos' => 'Numero de Ciclos o ejercicio operado a la fecha:',
			'fondos' => 'Fondos de Aseguramiento o Instituciones con los que he contratado seguros:',
			'fecha_inicio' => 'Fecha Inicio de Seguro',
			'fecha_vigencia' => 'Fecha Vigencia de Seguro',
			'fecha_registro' => 'Fecha del Registro',
			'ciudad' => 'Ciudad',
			'estado' => 'Estado',
			'documentacion_rfc' => 'Copia de la cédula de identificación fiscal (Registro Federal de Contribuyentes).',
			'documentacion_curp' => 'Constancia de la CURP.',
			'documentacion_identificacion' => 'Copia de identificación oficial del solicitante persona física (De preferencia credencial del elector,
			                                    pasaporte o cédula profesional',
			'documentacion_constancia_fondo' => 'Original de la constancia expedida por el fondo de aseguramiento _________________, en la que se describe los servicios de
			                                     aseguramiento que no puede otorgarme y las razones de esa imposibilidad, en su caso.',
			'documentacion_acta_asamblea' => 'Copia del acta de la Asamblea General del Fondo de Aseguramiento ________________________, en la que se acordo mi separación
			                                  como socio; ó, en su defecto, el original del acuse de la solicitud de separación recibida por el Fondos
											  de Aseguramiento ______________________.',
			'documentacion_estudio_viabilidad' => 'Estudio de viabilidad técnico-económico por cultivo o especie ganadera, en su caso, en el que se precisan los
			                                       indices de indemnizaciones de los últimos cinco años, asi como la información necesaria para determinar 
												   mi admisión como socio.',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('domicilio',$this->domicilio,true);
		$criteria->compare('curp',$this->curp,true);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('actividades',$this->actividades,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('ciclos',$this->ciclos,true);
		$criteria->compare('fondos',$this->fondos,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_vigencia',$this->fecha_vigencia,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('documentacion_rfc',$this->documentacion_rfc);
		$criteria->compare('documentacion_curp',$this->documentacion_curp);
		$criteria->compare('documentacion_identificacion',$this->documentacion_identificacion);
		$criteria->compare('documentacion_constancia_fondo',$this->documentacion_constancia_fondo);
		$criteria->compare('documentacion_acta_asamblea',$this->documentacion_acta_asamblea);
		$criteria->compare('documentacion_estudio_viabilidad',$this->documentacion_estudio_viabilidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SocioPersonaFisica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
