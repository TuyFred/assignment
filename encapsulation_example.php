<?php
class BankAccount {
    private $balance;

    public function __construct($amount) {
        $this->balance = $amount;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return "Current balance: $" . $this->balance;
    }
}

$account = new BankAccount(100);
$account->deposit(50);
echo $account->getBalance();
?>
