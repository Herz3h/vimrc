Vim�UnDo� �(�����=ԖǷ�"����&p2N7�   2           } else {   ,         "      "   "        V���    _�                             ����                                                                                                                                                                                                                                                                                                                                                V   ,    V���     �         2    �         2          /**   .     * Retourne les dates de traitement du CRM        *    ?     * @return array ['year' =>, 'startDate' =>, 'endDate' => ]        */   (    public static function getCrmDates()       {           $r = array();              =        // Année de traitement = année courante par défaut   .        if (!CakeSession::check('Crm.year')) {               $year = date('Y');   2            CakeSession::write('Crm.year', $year);               $r['year'] = $year;           } else {   7            $r['year'] = CakeSession::read('Crm.year');   	        }              :        $r['startDate'] = sprintf('%d-01-01', $r['year']);   8        $r['endDate'] = sprintf('%d-12-31', $r['year']);                      return $r;       }5�_�                            ����                                                                                                                                                                                                                                                                                                                                                V   ,    V���    �      !   I      -     * Retourne le type de client à afficher5�_�                    $       ����                                                                                                                                                                                                                                                                                                                                                V   ,    V���    �   #   %   I      -    public static function getCrmClientType()5�_�                    "       ����                                                                                                                                                                                                                                                                                                                                                V   ,    V���    �   !   #   I           * @return int client type5�_�                    &       ����                                                                                                                                                                                                                                                                                                                                                V   ,    V���    �   %   '        5�_�                    '       ����                                                                                                                                                                                                                                                                                                                                                V   ,    V���    �   &   (        5�_�                   "       ����                                                                                                                                                                                                                                                                                                                            '           -   	       V        V���    �   !   #   G      !     * @return string client type5�_�         	          &        ����                                                                                                                                                                                                                                                                                                                            (           .   	       V        V���     �   &   '   G              �   &   (   H              if()5�_�                    '       ����                                                                                                                                                                                                                                                                                                                            (           .   	       V        V���     �   &   (   H      !        if(!CakeSession::check())5�_�                    '       ����                                                                                                                                                                                                                                                                                                                            (           .   	       V        V���     �   &   (   H      #        if(!CakeSession::check(''))5�_�                    '        ����                                                                                                                                                                                                                                                                                                                            (           .   	       V        V���    �   &   (   H      1        if(!CakeSession::check('Crm.clientType'))5�_�                    '       ����                                                                                                                                                                                                                                                                                                                            )           /   	       V        V���     �   '   (   H                  �   '   )   I      
        {}5�_�                    (   	    ����                                                                                                                                                                                                                                                                                                                            +           1   	       V        V���     �   '   )   I      	        {   	        }�   (   )   J                  �   (   *   K                   CakeSession::write()5�_�                    )       ����                                                                                                                                                                                                                                                                                                                            +           1   	       V        V���     �   (   *   K      "            CakeSession::write('')5�_�                    )        ����                                                                                                                                                                                                                                                                                                                            +           1   	       V        V���     �   (   *   K      0            CakeSession::write('Crm.clientType')5�_�                    )   /    ����                                                                                                                                                                                                                                                                                                                            +           1   	       V        V��      �   (   *   K      4            CakeSession::write('Crm.clientType', '')5�_�                    )   2    ����                                                                                                                                                                                                                                                                                                                            +           1   	       V        V��     �   (   *   K      7            CakeSession::write('Crm.clientType', 'all')5�_�                    )   7    ����                                                                                                                                                                                                                                                                                                                            ,          .          V   7    V��    �   (   *   K      8            CakeSession::write('Crm.clientType', 'all');5�_�                    ,        ����                                                                                                                                                                                                                                                                                                                            ,          ,          V   7    V��
     �   +   /        5�_�                    -       ����                                                                                                                                                                                                                                                                                                                            ,          ,          V   7    V��     �   ,   .   H      4            return  = CakeSession::read('Crm.year');5�_�                    -       ����                                                                                                                                                                                                                                                                                                                            ,          ,          V   7    V��     �   ,   .   H      3            return = CakeSession::read('Crm.year');5�_�                    -       ����                                                                                                                                                                                                                                                                                                                            ,          ,          V   7    V��     �   ,   .   H      2            return  CakeSession::read('Crm.year');5�_�                    -       ����                                                                                                                                                                                                                                                                                                                            0          3          V       V��   	 �   ,   .   H      1            return CakeSession::read('Crm.year');5�_�                    0        ����                                                                                                                                                                                                                                                                                                                            0          0          V       V��    
 �   /   4        5�_�                    )       ����                                                                                                                                                                                                                                                                                                                            1          1          V       V��'     �   )   *   D                  �   )   +   E                  return ''5�_�                    *       ����                                                                                                                                                                                                                                                                                                                            1          1          V       V��)     �   )   +   E                  return 'all'5�_�                     *       ����                                                                                                                                                                                                                                                                                                                            1          1          V       V��*    �   )   +   E                  return 'all';5�_�      !               ,       ����                                                                                                                                                                                                                                                                                                                            0          0          V       V��5     �   +   -        5�_�       "           !   ,       ����                                                                                                                                                                                                                                                                                                                            0          0          V       V��6    �   +   -   D               else {5�_�   !               "   ,       ����                                                                                                                                                                                                                                                                                                                            0          0          V       V��8    �   +   -   D              else {5�_�      
          	   '        ����                                                                                                                                                                                                                                                                                                                            '           '   	       V        V���     �   &   .        5�_�   	              
   %       ����                                                                                                                                                                                                                                                                                                                            (           (   	       V        V���     �   %   &   @              �   %   '   A              if()5�_�   
                  &       ����                                                                                                                                                                                                                                                                                                                            (           (   	       V        V���     �   %   '   A              if($)5�_�                    %       ����                                                                                                                                                                                                                                                                                                                                                V   ,    V���     �   %   &   G       5��