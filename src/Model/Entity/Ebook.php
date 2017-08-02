<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ebook Entity
 *
 * @property string $id
 * @property string $book_title
 * @property string $language_id
 * @property string $sub_topic_id
 * @property \Cake\I18n\FrozenTime $uploaded_at
 * @property string $file_name
 * @property string $file_description
 *
 * @property \App\Model\Entity\Language $language
 * @property \App\Model\Entity\SubTopic $sub_topic
 */
class Ebook extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
