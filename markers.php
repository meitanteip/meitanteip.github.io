function mapsmultimarkers(){
    $this->data = $this->Map->find('all');
    $array_size = count($this->data);
    $latlngs = null;
    for ($i = 0; $i < $array_size; $i++) {
        $latlngs = $latlngs . "[" . "'" . $this->data[$i]['Map']['note'] . "'" . "," . $this->data[$i]['Map']['lat'] . "," . $this->data[$i]['Map']['lng'] . "]";
        if($i != $array_size -1 ){
            $latlngs = $latlngs . ",";
        }
    }
    $this->set('latlngs', $latlngs);
}
