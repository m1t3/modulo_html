Algoritmo "AtividadeRecuperacaoFibonacci"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Fernando
// Descri��o   : sequ�ncia de Fibonacci
// Autor(a)    : Lana
// Data atual  : 01/07/2024
Var
// Se��o de Declara��es das vari�veis
 termo1, termo2, prox, n, i: inteiro
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
     termo1 <- 1
   termo2 <- 1
   Escreva("Digite um n�mero inteiro para o limite da sequ�ncia: ")
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