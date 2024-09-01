<?php

class InvoiceModel extends Model {
    public function getAllInvoices() {
        $sql = "SELECT * FROM invoices";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    // Other CRUD operations for invoices
}
