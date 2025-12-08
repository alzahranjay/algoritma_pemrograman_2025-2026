import java.util.*;

public class nim_array {
    public static void main(String[] args) {

        try (Scanner sc = new Scanner(System.in)) {
            System.out.print("Masukkan NIM: ");
            String nim = sc.nextLine().trim();

            ArrayList<Integer> digits = new ArrayList<>();
            for (int i = 0; i < nim.length(); i++) {
                char c = nim.charAt(i);
                if (Character.isDigit(c)) digits.add(c - '0');
            }

            if (digits.isEmpty()) {
                System.out.println("Tidak ada digit.");
                return;
            }

            int total = digits.size();
            int mx = digits.get(0);
            int mn = digits.get(0);
            long sum = 0;
            for (int d : digits) {
                sum += d;
                if (d > mx) mx = d;
                if (d < mn) mn = d;
            }

            double avg = (double)sum / total;

            System.out.println("Array digit = " + digits);
            System.out.println("Total digit: " + total);
            System.out.println("Maksimum digit: " + mx);
            System.out.println("Minimum digit: " + mn);
            System.out.printf("Rata-rata digit: %.2f%n", avg);

            Collections.reverse(digits);
            System.out.println("Reverse = " + digits);
        }
    }
}