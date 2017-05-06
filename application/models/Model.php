<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model { 

    //vyber vsetkych zaznamov z danej tabulky
	function select_all_data($table) { 
        $this->db->select('*')
                ->from($table);
        return $this->db->get();
    }
    
	//vkladanie noveho zaznamu do tabulky
    function insert_data($table, $data) { 
        $this->db->insert($table, $data);
    }
    
	function select_all_smena($table) {
        $this->db->select('*')
                ->from($table)
                ->join('Taxikari','Taxikari.idTaxikari = Smena.Taxikari_idTaxikari');
        return $this->db->get();
    }
	


	function select_all_cesta($table) {
        $this->db->select('*')
                ->from($table)
                ->join('smena','smena.idSmena = cesta.Smena_idSmena');
        return $this->db->get();
    }

   
    //zmazanie zaznamov z tabulky podla where
    function delete_data($column, $value, $table) { 
        $this->db->where($column, $value);
        $this->db->delete($table);
    }
    
    //aktualizacia udajov v tabulke podla where
    function update_data($column, $value, $table, $data) {
        $this->db->where($column, $value);
        $this->db->update($table, $data);
    }
	
	function get_cesta_dropdown() {
        $this->db->order_by('idCesta')
                ->select('Smena_idSmena')
                ->from('cesta');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $dropdowns = $query->result();
            foreach ($dropdowns as $dropdown)
            {
                $dropdownlist[$dropdown->Smena_idSmena] = $dropdown->Smena_idSmena;
            }
            return $dropdownlist;
        }
    }
 
function get_taxikari_dropdown() {
        $this->db->order_by('idTaxikari')
                ->select('idTaxikari,CONCAT(taxikari.meno, " ", taxikari.priezvisko) as taxikar')
                ->from('taxikari');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $dropdowns = $query->result();
            foreach ($dropdowns as $dropdown)
            {
                $dropdownlist[$dropdown->idTaxikari] = $dropdown->taxikar;
            }
            return $dropdownlist;
        }
    }
	
	function get_taxikari($id) {
		$taxikari=[];
        $this->db->select('*')
                ->from('taxikari')
                ->where('idTaxikari', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $zoznam = $query->result();
            foreach ($zoznam as $row)
            {
                 $taxikari['Meno'] = $row->Meno;
                 $taxikari['Priezvisko'] = $row->Priezvisko;
                 $taxikari['auto'] = $row->auto;
                 $taxikari['tel'] = $row->tel;
				 
            }
        }
        return $taxikari;
    }


	function get_smena($id) {
		$smena = []; // ak neprejde foreach, tak premenna $smena neexistuje. Tak je fajn to predtym este definovat aby bola aspon isSet
        $this->db->select('*')
                ->from('Smena')
                ->where('idSmena', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $zoznam = $query->result();
            foreach ($zoznam as $row)
            {
                 $smena['zaciatok'] = $row->zaciatok;
                 $smena['koniec'] = $row->koniec;
                 $smena['Taxikari_idTaxikari'] = $row->Taxikari_idTaxikari;
            }
        }
        return $smena;
    }

	function get_cesta($id) {
        $this->db->select('*')
                ->from('Cesta')
                ->where('idCesta', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $zoznam = $query->result();
            foreach ($zoznam as $row)
            {
                 $cesta['Mesto'] = $row->Mesto;
                 $cesta['Ulica'] = $row->Ulica;
                 $cesta['Mesto_ciel'] = $row->Mesto_ciel;
                 $cesta['Ulica_ciel'] = $row->Ulica_ciel;
                 $cesta['cena'] = $row->cena;
                 $cesta['najazdeneKm'] = $row->najazdeneKm;
				 $cesta['Zakaznik_kontakt'] = $row->Zakaznik_kontakt;
				 $cesta['datum'] = $row->datum;
				 $cesta['Smena_idSmena'] = $row->Smena_idSmena;
            }
        }
        return $cesta;
		
	}
	
	function get_user($id) {
        $this->db->select('*')
                ->from('user')
                ->where('idUser', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $zoznam = $query->result();
            foreach ($zoznam as $row)
            {
                 $user['Meno'] = $row->meno_pouzivatela;
                 $user['Priezvisko'] = $row->priezvisko_pouzivatela;
                 $user['Email'] = $row->email;
				 $user['Heslo'] = $row->heslo;
            }
        }
        return $user;
    }

} 