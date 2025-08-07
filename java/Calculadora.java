/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package calculadora;

/**
 *
 * @author LUCCAKEIDANNOLIVEIRA
 */
import java.util.Scanner;
public class Calculadora {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        System.out.println("Calculadora");
         Scanner ler= new Scanner(System.in);
        int a, b, soma;
        System.out.println("Digite um número: ");
        a = ler.nextInt();
        System.out.println("Digite outro número: ");
        b = ler.nextInt();
        soma = a + b;
        System.out.println("A soma é"+soma);
        //Subtração
        int subtracao = a - b;
        System.out.println("A subtracao = "+subtracao);
        //Multiplicação
        int multi = a * b;
        System.out.println("A multiplicacao = "+multi);
        //Divisão
        int div = a / b;
        System.out.println("A divisao = "+div);
    }
    
}
