<?php

class Account
{
    private float $accountNo;
    private string $holder;
    private float $balance;

    function __construct(float $accountNo, string $holder, float $balance = 0)
    {
        $this->accountNo = $accountNo;
        $this->holder = $holder;
        $this->balance = $balance;
    }

    public function getAccountNo()
    {
        return $this->accountNo;
    }
    public function getHolder()
    {
        return $this->holder;
    }

    public function setBalance(float $amount)
    {
        $this->balance = $amount;
    }
    public function getBalance()
    {
        return $this->balance;
    }

    function deposit(float $amount)
    {
        if ($amount <= 0) {
            return throw new Exception("Enter the valid amount");
        }
        $this->balance += $amount;
    }

    function withdraw(float $amount)
    {
        if ($amount <= 0) {
            return throw new Exception("Enter the valid amount");
        } else if ($amount > $this->getBalance()) {
            return throw new Exception("Insufficient balance");
        }
        $this->balance -= $amount;
    }

    function printDetails()
    {
        echo "\n\nAccount Number: " . $this->accountNo . "";
        echo "\nHolder Name: " . $this->holder;
        echo "\nBalance: Rs." . $this->balance . "\n\n";
    }
}

class Bank
{
    private array $accounts = [];
    private float $accountNo = 1111111111;

    function createAccount(string $name, float $initialBalance = 0)
    {
        $account = new Account($this->accountNo, $name, $initialBalance);

        $this->accounts[(string)$this->accountNo] = $account;
        $this->accountNo++;

        return $account;
    }

    function searchAccount(float $accountNo)
    {
        if (array_key_exists((string)$accountNo, $this->accounts)) {
            return $this->accounts[(string)$accountNo];
        }
        echo "\nAccount doesn't exist\n";
        return null;
    }

    function transfer(float $fromAccountNo, float $toAccountNo)
    {
        if (!array_key_exists((string)$fromAccountNo, $this->accounts)) {
            echo "\n** Sender's account doesn't exist **\n";
            return null;
        } else if (!array_key_exists((string)$toAccountNo, $this->accounts)) {
            echo "\n** Receiver's account doesn't exist **\n";
            return null;
        }

        $amount = (float)readline("Enter the amount which you want to transfer: Rs.");
        $this->accounts[(string)$fromAccountNo]->withdraw($amount);
        $this->accounts[(string)$toAccountNo]->deposit($amount);

        echo "\n* Money trasfered from " . $fromAccountNo . " to " . $toAccountNo . "**\n";
    }

    function menus()
    {
        echo "\n";
        echo "==============================\n";
        echo "       ACCOUNT MENU\n";
        echo "==============================\n";
        echo "1. Create Account\n";
        echo "2. Check Balance\n";
        echo "3. Deposit\n";
        echo "4. Withdraw\n";
        echo "5. Transfer Money\n";
        echo "6. Account Details\n";
        echo "==============================\n";
    }
}


$bank = new Bank();

while (true) {
    $bank->menus();

    $choice = readline("Enter your choice: ");

    try {
        switch ($choice) {
            case 1:
                $name = readline("Enter your name: ");
                $initialBalance = 0;

                try {
                    $initialBalance = (float)readline("Enter initialBalance: ");
                } catch (Exception) {
                    echo "Enter the valid amount";
                }
                $account = $bank->createAccount($name, $initialBalance);
                $account->printDetails();
                break;

            case 2:
                $accountNo = (float)readline("Enter the Account number: ");
                $account = $bank->searchAccount($accountNo);

                if ($account != null)
                    echo "\nAccount Balance: Rs." . $account->getBalance() . "\n";
                break;


            case 3:
                $accountNo = (float)readline("Enter the Account number: ");
                $account = $bank->searchAccount($accountNo);

                if ($account != null) {
                    $deposit = (float)readline("Enter the amount which you want to deposit: Rs.");

                    $account->deposit($deposit);

                    echo "\nAccount Balance: Rs." . $account->getBalance . "\n";
                }
                break;


            case 4:
                $accountNo = (float)readline("Enter the Account number: ");
                $account = $bank->searchAccount($accountNo);

                if ($account != null) {
                    $withdraw = (float)readline("Enter the amount which you want to withdraw: Rs.");

                    $account->withdraw($withdraw);
                    echo "\nAccount Balance: Rs." . $account->getBalance . "\n";
                }
                break;


            case 5:
                $fromAccountNo = (float)readline("Enter the Sender's Account number: ");
                $toAccountNo = (float)readline("Enter the Receiver's Account number: ");

                $bank->transfer($fromAccountNo, $toAccountNo);

                break;

            case 6:
                $accountNo = (float)readline("Enter the Account number: ");
                $account = $bank->searchAccount($accountNo);

                if ($account != null) {
                    $account->printDetails();
                }
                break;

            default:
                exit();
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
