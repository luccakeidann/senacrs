/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package imc;

/**
 *
 * @author LUCCAKEIDANNOLIVEIRA
 */
import java.util.Scanner;
public class IMC {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
   // Entrada de dados
   Scanner ler = new Scanner(System.in);
        System.out.print("Digite o peso (em kg): ");
        double peso = ler.nextDouble();
 
        System.out.print("Digite a altura (em metros): ");
        double altura = ler.nextDouble();
 
        // Cálculo do IMC
        double imc = peso / (altura * altura);
 
        // Exibição do resultado
        System.out.printf("Seu IMC é: %.2f\n", imc);
 
        // Determinação do status
        if (imc < 18.5) {
            System.out.println("Status: Abaixo do peso");
        } else if (imc <= 24.9) {
            System.out.println("Status: Normal");
        } else if (imc <= 29.9) {
            System.out.println("Status: Acima do peso");
        } else {
            System.out.println("Status: Obesidade");
        }
 
      
    }
    
}
