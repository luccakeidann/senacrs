/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package projetosoma;

/**
 *
 * @author LUCCAKEIDANNOLIVEIRA
 */
import java.util.Scanner;
public class ProjetoSOMA {
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // Somar dois números
        System.out.println("Somar números");
        Scanner ler= new Scanner(System.in);
        int a, b, soma;
        System.out.println("Digite um número: ");
        a = ler.nextInt();
        System.out.println("Digite outro número: ");
        b = ler.nextInt();
        soma = a + b;
        System.out.println("A soma é"+soma);
        
        
    }
    
}
