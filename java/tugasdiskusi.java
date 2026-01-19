import java.util.Scanner;

public class tugasdiskusi {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan Nama     : ");
        String nama = input.nextLine();

        System.out.print("Masukkan Umur     : ");
        int umur = input.nextInt();

        System.out.println("=== Biodata ===");
        System.out.println("Nama  : " + nama);
        System.out.println("Umur  : " + umur + " tahun");

        input.close(); 
    }
}
