class Mobil{
   <var>$jumlahroda =4;</var>
   <var>$warna="Merah";</var> 
   <var>v$bahanBakar="Pertamax"</var>
   <var>$harga=120000000;</var> 
   <var>$merek='A';</var>
}

        //deklakarai method
        public function statusHarga()
        {
        if ($this->harga>50000000)$status='Mahal';
        else $status='Murah';
        return $status;
        }
