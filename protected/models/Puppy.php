<?php

/**
 * This is the model class for table "puppydb.puppy".
 *
 * The followings are the available columns in table 'puppydb.puppy':
 * @property integer $id
 * @property integer $age
 * @property string $name
 * @property string $breed
 * @property string $status
 * @property string $gender
 * @property string $details
 * @property string $image
 */
class Puppy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'puppydb.puppy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('age, name, breed, status, gender, details', 'required'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('name, breed, status', 'length', 'max'=>48),
			array('gender', 'length', 'max'=>1),
			array('details', 'length', 'max'=>600),
			array('image', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, age, name, breed, status, gender, details, image', 'safe', 'on'=>'search'),
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
			'age' => 'Age',
			'name' => 'Name',
			'breed' => 'Breed',
			'status' => 'Status',
			'gender' => 'Gender',
			'details' => 'Details',
			'image' => 'Image',
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
		$criteria->compare('age',$this->age);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('breed',$this->breed,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Puppy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
