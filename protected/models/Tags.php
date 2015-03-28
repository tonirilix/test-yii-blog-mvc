<?php

/**
 * This is the model class for table "tags".
 *
 * The followings are the available columns in table 'tags':
 * @property integer $id
 * @property string $tag
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property PostTag[] $postTags
 */
class Tags extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tags';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tag', 'required'),
            array('tag', 'length', 'max' => 255),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, tag, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'postTags' => array(self::HAS_MANY, 'PostTag', 'tag_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'tag' => 'Tag',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('tag', $this->tag, true);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Tags the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function obtenerTagsModels($tag = null) {
        $tags = $tag == null ? Tags::model()->findAll() : Tags::model()->findAllByAttributes(array('tag' => $tag));        
        return $tags;
    }
    
    public function obtenerTagsModelsIds($tag = null) {
        $tags = $this->obtenerTagsModels($tag);
        $tags_ids = array_keys(CHtml::listData( $tags, 'id','tag'));   
        return $tags_ids;
    }

}
