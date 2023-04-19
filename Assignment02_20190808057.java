/*
@author Dogan Kirmizigul
@version 16.03.2022
 */

import java.util.ArrayList;
import java.util.Random;

public class Assignment02_20190808057 {
    public static void main(String[] args) {

        Bank b = new Bank("My bank", "My Bank's Address");
        b.addCompany(1, "Company 1");
        b.getCompany(1).openAccount("1234", 0.05);
       
    }
}

class Bank {
    private String Name, Address;
    ArrayList<Customer> Customers;
    ArrayList<Company> Companies;
    ArrayList<Account> Accounts;

    public Bank(String Name, String Address) {
        this.Name = Name;
        this.Address = Address;
        Customers = new ArrayList<Customer>();
        Companies = new ArrayList<Company>();
        Accounts = new ArrayList<Account>();
    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }

    public String getAddress() {
        return Address;
    }

    public void setAddress(String address) {
        Address = address;
    }

    public void addCustomer(int id, String name, String surname) {
        Customer newCustomer = new Customer(name, surname);
        newCustomer.setId(id);
        Customers.add(newCustomer);
    }

    public void addCompany(int id, String name) {
        Company newCompany = new Company(name);
        newCompany.setId(id);
        Companies.add(newCompany);
    }

    public void addAccount(Account account) {
        Accounts.add(account);
    }

    public Customer getCustomer(int id) throws CustomerNotFoundException {
        for (Customer cu : Customers) {
            if (cu.getId() == id)
                return cu;

        }
        throw new CustomerNotFoundException(id);

    }

    public Customer getCustomer(String name, String surname) throws CustomerNotFoundException {
        for (Customer cu : Customers) {
            if (cu.getName() == name && cu.getSurname() == surname)
                return cu;

        }
        throw new CustomerNotFoundException(name, surname);
    }

    public Company getCompany(int id) throws CompanyNotFoundException {
        for (Company co : Companies) {
            if (co.getId() == id)
                return co;

        }
        throw new CompanyNotFoundException(id);
    }

    Company getCompany(String name) throws CompanyNotFoundException {
        for (Company co : Companies) {
            if (co.getName() == name)
                return co;

        }
        throw new CompanyNotFoundException(name);
    }

    Account getAccount(String accountNum) throws AccountNotFoundException {
        for (Account acc : Accounts) {
            if (acc.getAccountNumber() == accountNum)
                return acc;
        }
        throw new AccountNotFoundException(accountNum);
    }

    // burayı hocaya sor !!
    double transferFunds(String accountFrom, String accountTo, double amount) throws InvalidAmountException {
        getAccount(accountFrom);
        getAccount(accountTo);
        double balanceOfAccountFrom = getAccount(accountFrom).getBalance();
        double balanceOfAccountTo = getAccount(accountTo).getBalance();
        double lastBalance = balanceOfAccountFrom - balanceOfAccountTo;
        if (balanceOfAccountFrom < amount) {
            throw new InvalidAmountException(amount);

        } else
            return lastBalance;

    }

    void closeAccount(String accountNum) throws BalanceRemainingException {
        Accounts.remove(getAccount(accountNum));
        if (getAccount(accountNum).getBalance() > 0)
            throw new BalanceRemainingException(getAccount(accountNum).getBalance());

    }

    // burayı tekrar yapmaya calıs.
    @Override
    public String toString() {
        return Name + " " + Address + "/n"
                + Companies + "/n";
    }

}

class Account {

    private String AccountNumber;
    private double balance;

    public Account(String AccountNumber) {
        this.AccountNumber = AccountNumber;
        balance = 0;
    }

    public Account(String AccountNumber, double balance) {
        this.AccountNumber = AccountNumber;
        this.balance = balance;
        if (balance < 0) {
            this.balance = 0;
        }

    }

    public String getAccountNumber() {
        return AccountNumber;
    }

    public double getBalance() {
        return balance;
    }

    public void deposit(double amount) {
        if (balance >= 0)
            balance = balance + amount;
            else
            throw new InvalidAmountException(amount);

    }

    public void withdrawal(double amount) {
        if (amount >= 0)
            balance = balance - amount;
            else if(amount<0 || lastBalance<amount)
            throw new InvalidAmountException(amount);

    }

    @Override
    public String toString() {
        return "Account " + getAccountNumber() +
                " has " + balance;
    }
}

class PersonalAccount extends Account {
    private String Name;
    private String Surname;
    private String PIN;

    public PersonalAccount(String AccountNumber, String Name, String Surname) {
        super(AccountNumber);
        this.Name = Name;
        this.Surname = Surname;
        Random rnd = new Random();
        int number = rnd.nextInt(9999);
        PIN = String.format("%04d", number);

    }

    public PersonalAccount(String AccountNumber, String Name, String Surname, double balance) {
        super(AccountNumber, balance);
        this.Name = Name;
        this.Surname = Surname;

        Random rnd2 = new Random();
        int number = rnd2.nextInt(9999);
        PIN = String.format("%04d", number);

    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }

    public String getSurname() {
        return Surname;
    }

    public void setSurname(String surname) {
        Surname = surname;
    }

    public String getPIN() {
        return PIN;
    }

    public void setPIN(String PIN) {
        this.PIN = PIN;
    }

    @Override
    public String toString() {
        return "Account " + getAccountNumber() +
                " belonging to " + getName() + " "
                + getSurname().toUpperCase() + " has " +
                getBalance();
    }

}

class BusinessAccount extends Account {
    private double interestRate;

    public BusinessAccount(String AccountNumber, double interestRate) {
        super(AccountNumber);
        this.interestRate = interestRate;
    }

    public BusinessAccount(String AccountNumber, double balance, double interestRate) {
        super(AccountNumber, balance);
        this.interestRate = interestRate;
    }

    public double getInterestRate() {
        return interestRate;
    }

    public void setInterestRate(double interestRate) {
        this.interestRate = interestRate;
    }

    public double calculateInterest() {
        return getBalance() * interestRate;
    }
}

class Customer {
    private int id;
    private String Name;
    private String Surname;
    ArrayList<PersonalAccount> PersonalAccounts;

    String determineAcctNum;
    double determineBalance = 0;

    public Customer(String Name, String Surname) {
        this.Name = Name;
        this.Surname = Surname;
        PersonalAccounts = new ArrayList<>();
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return Name;
    }

    public void setName(String Name) {
        this.Name = Name;
    }

    public String getSurname() {
        return Surname;
    }

    public void setSurname(String Surname) {
        this.Surname = Surname;
    }

    void openAccount(String acctNum) {
        PersonalAccount newPers = new PersonalAccount(acctNum, Name, Surname);
        PersonalAccounts.add(newPers);

        determineAcctNum = acctNum;
    }

    public PersonalAccount getAccount(String acctNum) throws AccountNotFoundException {

        boolean hasAccount = false;
        PersonalAccount personalAccount = null;

        for (PersonalAccount account : PersonalAccounts) {
            if (account.getAccountNumber().equals(acctNum)) {
                hasAccount = true;
                personalAccount = account;
            }
        }
        if (hasAccount) {
            return personalAccount;
        } else
            throw new AccountNotFoundException(acctNum);

    }

    void closeAccount(String accountNum) {
        getAccount(accountNum);
        PersonalAccounts.remove(getAccount(accountNum));
        if (determineBalance > 0)
            throw new BalanceRemainingException(determineBalance);

    }

    @Override
    public String toString() {
        return Name + " " + Surname.toUpperCase();
    }
}

class Company {
    private int id;
    private String Name;
    ArrayList<BusinessAccount> BusinessAccounts;

    public Company(String Name) {
        this.Name = Name;
        BusinessAccounts = new ArrayList<>();
    }

    public String getName() {
        return Name;
    }

    public void setName(String Name) {
        this.Name = Name;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void openAccount(String acctNum, double rate) {
        BusinessAccount bsAcc = new BusinessAccount(acctNum, 0, rate);
        BusinessAccounts.add(bsAcc);

    }

    public BusinessAccount getAccount(String acctNum) {
        boolean hasAccount = false;
        BusinessAccount bsAccount = null;

        for (BusinessAccount account : BusinessAccounts) {
            if (account.getAccountNumber().equals(acctNum)) {
                hasAccount = true;
                bsAccount = account;
            }
        }
        if (hasAccount) {
            return bsAccount;
        } else
            throw new AccountNotFoundException(acctNum);
    }

    void closeAccount(String accountNum) {
        getAccount(accountNum);
        BusinessAccounts.remove(getAccount(accountNum));
        if (getAccount(accountNum).getBalance() > 0)
            throw new BalanceRemainingException(getAccount(accountNum).getBalance());

    }

    public String toString() {
        return Name;
    }
}

// Exceptions;

class AccountNotFoundException extends RuntimeException {
    private String acctNum;

    public AccountNotFoundException(String acctNum) {
        this.acctNum = acctNum;
    }

    @Override
    public String toString() {
        return "AccountNotFoundException" + acctNum;
    }

}

class BalanceRemainingException extends RuntimeException {

    private double balance;

    public BalanceRemainingException(double balance) {
        this.balance = balance;
    }

    @Override
    public String toString() {
        return "BalanceRemainingException:" + balance;
    }

    public double getBalance() {
        return balance;
    }
}

class CompanyNotFoundException extends RuntimeException {

    private int id;
    private String name;

    public CompanyNotFoundException(int id, String name) {
        this.name = name;
        this.id = id;
    }

    public CompanyNotFoundException(int id) {
        this.id = id;
        name = null;
    }

    public CompanyNotFoundException(String name) {
        this.name = name;
        id = 0;
    }

    @Override
    public String toString() {
        if (name != null) {
            return "CompanyNotFoundException:name - " + name;
        } else
            return "CompanyNotFoundException:id - " + id;
    }
}

class CustomerNotFoundException extends RuntimeException {
    private int id;
    private String name, surname;

    CustomerNotFoundException(int id, String name, String surname) {
        if (id > 0) {
            this.id = id;
        } else {
            throw new PlaceHolderException();
        }
        this.name = name;
        this.surname = surname;
    }

    public CustomerNotFoundException(int id) {
        if (id > 0) {
            this.id = id;
        } else {
            throw new PlaceHolderException();
        }
        this.name = null;
        this.surname = null;
    }

    public CustomerNotFoundException(String name, String surname) {
        this.name = name;
        this.surname = surname;
    }

    @Override
    public String toString() {
        if (name != null || surname != null)
            return "CustomerNotFoundException: name - " + name + " " + surname;
        else
            return "CustomerNotFoundException: id - " + id;
    }

}

class InvalidAmountException extends RuntimeException {
    private double amount;

    InvalidAmountException(double amount) {
        this.amount = amount;

    }

    @Override
    public String toString() {
        return "InvalidAmountException: " + amount;

    }
}

class PlaceHolderException extends RuntimeException {

}
