Vim�UnDo� <%x�)h��(Gb0��l��ø�2���5v   �                                  V��E    _�                     �       ����                                                                                                                                                                                                                                                                                                                                                             V���    �   �   �   �              } else {5�_�                    �   R    ����                                                                                                                                                                                                                                                                                                                                                             V���    �   �   �   �      S        if ($this->{$model}->saveField($name, $value, array('validate' => true))) {5�_�                   r        ����                                                                                                                                                                                                                                                                                                                            t          �          V       V��      �   r   u   �              �   r   t   �    5�_�                    t       ����                                                                                                                                                                                                                                                                                                                            v          �          V       V��     �   s   u   �              return $this->ok()5�_�                    t       ����                                                                                                                                                                                                                                                                                                                            v          �          V       V��    �   s   u   �              return $this->ok()5�_�      	              t       ����                                                                                                                                                                                                                                                                                                                            v          �          V       V��D     �   s   t                  return $this->ok();5�_�                 	   \       ����                                                                                                                                                                                                                                                                                                                            u          �          V       V��L    �   \   ^   �    �   \   ]   �    5�_�   	      
          ]        ����                                                                                                                                                                                                                                                                                                                            v          �          V       V��(    �   \   ]                  return $this->ok();5�_�                             ����                                                                                                                                                                                                                                                                                                                             u          �          V       V��D     5�_�   	              
   p       ����                                                                                                                                                                                                                                                                                                                            w          �          V       V�ɮ     �   p   q   �    �   p   q   �      G                'OrderItem.item_type' => 2 // 1 Article, 2 Pack article5�_�                   t        ����                                                                                                                                                                                                                                                                                                                            t          �          V       V���     �   s   u          )        /* App::uses($model, 'Model'); */�   t   v          +        /* $this->{$model} = new $model; */�   u   w          (        /* $this->{$model}->id = $id; */�   v   x                  �   w   y          /        /* if (!$this->{$model}->exists()) { */�   x   z          -        /*     return $this->erreur(array( */�   y   {          >        /*         'message' => 'Enregistrement inexistant' */�   z   |                  /*     )); */�   {   }                  /* } */�   |   ~                          �   }             T        /* // Variables sérialisées : ajout de l'élément à la fin du tableau */�   ~   �          5        /* if (isset($this->{$model}->toSerialize) */�      �          B        /*  && in_array($name, $this->{$model}->toSerialize)) { */�   �   �          >        /*     // Récup du tableau et ajout de l'élément */�   �   �          9        /*     $field = $this->{$model}->field($name); */�   �   �          $        /*     $field[] = $value; */�   �   �          "        /*     $value = $field; */�   �   �                  /* } */�   �   �                  �   �   �                  /* // Dates */�   �   �          4        /* if (strpos($name, 'date') !== false) { */�   �   �          8        /*     App::uses('JplUtil', '/Lib/JplUtils'); */�   �   �          M        /*     $value = JplUtil::convertFrenchForMysqlWithoutHour($value); */�   �   �                  /* } */�   �   �           �   �   �          X        /* if ($this->{$model}->saveField($name, $value, array('validate' => true))) */ �   �   �                  /* { */�   �   �          )        /*     return $this->ok(array( */�   �   �          "        /*         'id' => $id, */�   �   �          (        /*         'model' => $model, */�   �   �          &        /*         'name' => $name, */�   �   �          '        /*         'value' => $value */�   �   �                  /*     )); */�   �   �                  /* } else */ �   �   �                  /* { */�   �   �          -        /*     return $this->erreur(array( */�   �   �          5        /*         'message' => 'Donnée invalide' */�   �   �                  /*     )); */�   �   �                  /* } */5�_�                     r        ����                                                                                                                                                                                                                                                                                                                            u          �          V       V���     �   r   s   �       5��