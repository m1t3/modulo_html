Algoritmo "AtividadeRecuperacaoFibonacci"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Fernando
// Descrição   : sequência de Fibonacci
// Autor(a)    : Lana
// Data atual  : 01/07/2024
Var
// Seção de Declarações das variáveis
 termo1, termo2, prox, n, i: inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
     termo1 <- 1
   termo2 <- 1
   Escreva("Digite um número inteiro para o limite da sequência: ")
   Leia(n)
   Escreva(termo1, " 2")
   Escreva(termo2, " 4")
   Para i de 3 ate n faca
      prox <- termo1 + termo2
      Escreva(prox, " ")
      termo1 <- termo2
      termo2 <- prox
      Fim Para
Fimalgoritmo