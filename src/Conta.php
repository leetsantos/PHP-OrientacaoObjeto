<?php
class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int  $numeroDeContas =0;

    public function __construct(Titular $titular)
    {
       $this->titular=$titular;
       $this->saldo=0;
       self::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    public function sacar(float $valorASacar) :void
    {
        if($valorASacar>$this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    public function depositar (float $valorADepositar) : void
    {
        if ($valorADepositar<0) {
            echo "O valor a depositar precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }
    public function transferir (float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir> $this->saldo){
            echo "Saldo Indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    public function getSaldo(): float
    {
        return $this->saldo;
    }
    public static function getNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }

    public function getNomeTitular():string
    {
        return $this->titular->getNome();
    }
    public function getCpf():string
    {
        return $this->titular->getCpf();
    }
}