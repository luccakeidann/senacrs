/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package boletim;

/**
 *
 * @author LUCCAKEIDANNOLIVEIRA
 */
import java.util.Scanner;
public class Boletim {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // Boletim
        double nota1, nota2, media;
        Scanner ler= new Scanner(System.in);
        System.out.println("Digite a nota da prova: ");
        nota1 = ler.nextDouble();
        System.out.println("Digite a nota do trabalho: ");
        nota2 = ler.nextDouble();
        // Calcular a média
        media = (nota1 + nota2)/2;
        System.out.println("Média = "+media);
        if(media >=9){
            System.out.println("PD");
        } else if (media >= 8) {
            System.out.println ("D");
        }else if (media >= 7) {
            System.out.println ("ED");
        }else{
            System.out.println("ND");
            
        }
                
        
    }
    
}
