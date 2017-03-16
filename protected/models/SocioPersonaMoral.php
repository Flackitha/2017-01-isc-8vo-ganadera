<?php

/**
 * This is the model class for table "tbl_socios_persona_moral".
 *
 * The followings are the available columns in table 'tbl_socios_persona_moral':
 * @property integer $id
 * @property string $razonsocial
 * @property string $domicilio
 * @property string $rfc
 * @property string $actividades
 * @property string $ubicacion
 * @property string $ciclos
 * @property string $fondos
 * @property string $gerente_nombre
 * @property string $gerente_domicilio
 * @property string $representante_nombre
 * @property string $representante_domicilio
 * @property string $fecha_inicio
 * @property string $fecha_vigencia
 * @property string $fecha_registro
 * @property integer $ciudad
 * @property integer $estado
 * @property integer $documentacion_rfc
 * @property integer $documentacion_identificacion
 * @property integer $documentacion_escri_constitucion
 * @property integer $documentacion_escri_nombra_consejo
 * @property integer $documentacion_escri_nombra_gerente
 * @property integer $documentacion_escri_nombra_apoderado
 * @property integer $documentacion_acta_asamblea_aproba
 * @property integer $documentacion_constancia_fondo
 * @property integer $documentacion_acta_asamblea
 * @property integer $documentacion_estudio_viabilidad
 *
 * The followings are the available model relations:
 * @property ConsejoSociedad[] $consejoSociedads
 * @property MiembrosSociedad[] $miembrosSociedads
 */
class SocioPersonaMoral extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_socios_persona_moral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('razonsocial, domicilio, rfc, actividades, ubicacion, ciclos, fondos, gerente_nombre, gerente_domicilio, representante_nombre, representante_domicilio, fecha_inicio, fecha_vigencia, fecha_registro, ciudad, estado, documentacion_rfc, documentacion_identificacion, documentacion_escri_constitucion, documentacion_escri_nombra_consejo, documentacion_escri_nombra_gerente, documentacion_escri_nombra_apoderado, documentacion_acta_asamblea_aproba, documentacion_constancia_fondo, documentacion_acta_asamblea, documentacion_estudio_viabilidad', 'required'),
			array('ciudad, estado, documentacion_rfc, documentacion_identificacion, documentacion_escri_constitucion, documentacion_escri_nombra_consejo, documentacion_escri_nombra_gerente, documentacion_escri_nombra_apoderado, documentacion_acta_asamblea_aproba, documentacion_constancia_fondo, documentacion_acta_asamblea, documentacion_estudio_viabilidad', 'numerical', 'integerOnly'=>true),
			array('razonsocial, actividades, fondos, representante_nombre', 'length', 'max'=>500),
			array('domicilio, rfc, ciclos', 'length', 'max'=>180),
			array('ubicacion, gerente_nombre, gerente_domicilio, representante_domicilio', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, razonsocial, domicilio, rfc, actividades, ubicacion, ciclos, fondos, gerente_nombre, gerente_domicilio, representante_nombre, representante_domicilio, fecha_inicio, fecha_vigencia, fecha_registro, ciudad, estado, documentacion_rfc, documentacion_identificacion, documentacion_escri_constitucion, documentacion_escri_nombra_consejo, documentacion_escri_nombra_gerente, documentacion_escri_nombra_apoderado, documentacion_acta_asamblea_aproba, documentacion_constancia_fondo, documentacion_acta_asamblea, documentacion_estudio_viabilidad', 'safe', 'on'=>'search'),
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
			'consejoSociedads' => array(self::HAS_MANY, 'ConsejoSociedad', 'sociedad_id'),
			'miembrosSociedads' => array(self::HAS_MANY, 'MiembrosSociedad', 'sociedad_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'razonsocial' => 'Denominacion o razón social',
			'domicilio' => 'Domicilio',
			'rfc' => 'Registro Federal de Contribuyentes (RFC)',
			'actividades' => 'Naturaleza de las actividades',
			'ubicacion' => 'Ubicación de los predios o unidades de explotación',
			'ciclos' => 'Numero de ciclos o ejercico operados a la fecha',
			'fondos' => 'Fondos de aseguramiento o instituciones con los que he contratado seguro',
			'gerente_nombre' => 'Nombre',
			'gerente_domicilio' => 'Domicilio particular',
			'representante_nombre' => 'Nombre',
			'representante_domicilio' => 'Domicilio particular',
			'fecha_inicio' => 'Fecha de Inicio',
			'fecha_vigencia' => 'Fecha de Vigencia',
			'fecha_registro' => 'Fecha de Registro',
			'ciudad' => 'Ciudad',
			'estado' => 'Estado',
			'documentacion_rfc' => 'Copia de la cédula de identificación fiscal (Registro Federal de Contribuyentes)',
			'documentacion_identificacion' => 'Copia de identificación oficial de las personas que firma la solicitud (De preferencia credencial de elector, pasaporte o cédula profesional)',
			'documentacion_escri_constitucion' => 'Copia de la escritura en la que consta la constitución de la persona moral solicitante',
			'documentacion_escri_nombra_consejo' => 'Copia de la escritura en la que consta el nombramiento de los miembros del Consejo de Administración o Administrador Único de la solicitante',
			'documentacion_escri_nombra_gerente' => 'Copia de la escritura en la que consta el nombramiento del Gerente o Director de la solicitante',
			'documentacion_escri_nombra_apoderado' => 'Copia de la escritura en la que consta el nombramiento del apoderado de la solicitante, en su caso',
			'documentacion_acta_asamblea_aproba' => 'Copia del Acta de asamble de socios en la que se haya aprobado la incorporación al Fondo de aseguramiento',
			'documentacion_constancia_fondo' => 'Original de la constancia expedida por el Fondo de Aseguramiento, en la que se describen los servicios de aseguramiento que no pueden otorgar a mi representada y las razones de esa imposibilidad, en su caso',
			'documentacion_acta_asamblea' => 'Copia del acta de Asamblea General del Fondo de Aseguramiento, que acordó la separación de mi representadada como socio; con o, en su defecto el original del acúse de la solicitud de separación recibida por el Fondo de Aseguramiento',
			'documentacion_estudio_viabilidad' => 'Estudio de viabilidad tecnico-economico por cultivo o especie ganadera, en su caso, en el que se precisan los indices de indemnizaciones de los ultimos 5 años, así como la información necesaria para determinar la admisión de mi representada como socio',
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
		$criteria->compare('razonsocial',$this->razonsocial,true);
		$criteria->compare('domicilio',$this->domicilio,true);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('actividades',$this->actividades,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('ciclos',$this->ciclos,true);
		$criteria->compare('fondos',$this->fondos,true);
		$criteria->compare('gerente_nombre',$this->gerente_nombre,true);
		$criteria->compare('gerente_domicilio',$this->gerente_domicilio,true);
		$criteria->compare('representante_nombre',$this->representante_nombre,true);
		$criteria->compare('representante_domicilio',$this->representante_domicilio,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_vigencia',$this->fecha_vigencia,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('ciudad',$this->ciudad);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('documentacion_rfc',$this->documentacion_rfc);
		$criteria->compare('documentacion_identificacion',$this->documentacion_identificacion);
		$criteria->compare('documentacion_escri_constitucion',$this->documentacion_escri_constitucion);
		$criteria->compare('documentacion_escri_nombra_consejo',$this->documentacion_escri_nombra_consejo);
		$criteria->compare('documentacion_escri_nombra_gerente',$this->documentacion_escri_nombra_gerente);
		$criteria->compare('documentacion_escri_nombra_apoderado',$this->documentacion_escri_nombra_apoderado);
		$criteria->compare('documentacion_acta_asamblea_aproba',$this->documentacion_acta_asamblea_aproba);
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
	 * @return SocioPersonaMoral the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
