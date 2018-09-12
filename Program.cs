using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Demo
{
    class Program
    {
        static void Main(string[] args)
        {
            //baitap1();
            //baitap2();
            //baitap3();
            //baitap4();
            //baitap5();
            //baitap6();
            baitap13();
        }

        // Bai tap 1
        public static int baitap1()
        {
            Console.WriteLine("Bai tap 1:");
            string cau1 = "Hello FIT-TDC";
            Console.WriteLine(cau1);
            return 0;
        }

        // Bai tap 2
        public static int baitap2()
        {
            Console.WriteLine("Bai tap 2:");
            string cau2;
            Console.Write("Nhap ten: "); cau2 = Console.ReadLine();
            Console.WriteLine("Chao mung "+cau2+" den voi FIT-TDC");
            return 0;
        }

        // Bai tap 3
        public static int baitap3()
        {
            Console.WriteLine("Bai tap 3:");
            int A = 100;
            int B;
            B = A;
            Console.WriteLine("Cho 2 bien A va B");
            Console.WriteLine("Gia tri nhap vao A la: " + A);
            Console.WriteLine("Gan gia tri A cho B: B = " + B);
            return 0;
        }

        // Bai tap 4
        public static int baitap4()
        {
            Console.WriteLine("Bai tap 4:");
            string A, B;
            Console.Write("Nhap gia tri so 1: "); A = Console.ReadLine();
            Console.Write("Nhap gia tri so 2: "); B = Console.ReadLine();
            float so1, so2;
            
            so1 = float.Parse(A);
            so2 = float.Parse(B);
            Console.WriteLine("Ket qua");
            Console.WriteLine("Cong : "+(so1 + so2));
            Console.WriteLine("Tru  : " + (so1 - so2));
            Console.WriteLine("Nhan : " + (so1 * so2));
            Console.WriteLine("Chia : " + (so1 / so2));
            return 0;
        }

        // Bai tap 5
        public static int baitap5()
        {
            Console.WriteLine("Bai tap 5:");
            string A, B;
            Console.Write("Nhap So Thu Nhat A: "); A = Console.ReadLine();
            Console.Write("Nhap So Thu Hai B: "); B = Console.ReadLine();

            int num1, num2;
            num1 = Int32.Parse(A);
            num2 = Int32.Parse(B);
            Console.WriteLine("Tong cua A va B la: " + (num1 + num2));
            return 0;
        }

        // Bai tap 6
        public static int baitap6()
        {
            Console.WriteLine("Bai tap 6:");
            string A;
            Console.Write("Nhap so nguyen duong: "); A = Console.ReadLine();

            int so1;
            so1 = Int32.Parse(A);
            if (so1 < 0)
            {
                Console.WriteLine("So vua nhap la So Am");
                Console.WriteLine("Vui long nhap lai");
            }
            else
            {
                if(so1 % 2 == 0)
                {
                    Console.WriteLine("So vua nhap la so chan");
                }
                else
                {
                    Console.WriteLine("So vua nhap la so le");
                }
            }
            return 0;
        }
        
        // Bai tap 13
        public static int baitap13()
        {
            Console.WriteLine("Bai tap 13:");
            string A;
            Console.Write("Nhap so nguyen duong nho hon 100: "); A = Console.ReadLine();

            int so1;
            so1 = Int32.Parse(A);
            for(int i = 0; i < so1; i++)
            {
                Console.WriteLine(i);
            }
            return 0;
        }

    }       
}
