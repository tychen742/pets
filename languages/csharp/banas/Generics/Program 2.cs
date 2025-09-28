using System;

namespace Generics {
    class Program {
        static void Main (string[] args) {

            KeyValue<int, string> kv = new KeyValue<int, string> (0, "");

            Console.WriteLine (kv.key);
            Console.WriteLine (kv.value);

            kv.key = 1000;
            kv.value = "John";

            KeyValue<int, string> membership = new KeyValue<int, string>(101, "Lee");
            Console.WriteLine (kv.key);
            Console.WriteLine (kv.value);
            kv.showData ();
            membership.showData();
        }
    }

    class KeyValue<TKey, TValue> {

        public TKey key { get; set; }
        public TValue value { get; set; }

        public KeyValue (TKey k, TValue v) {
            key = k;
            value = v;
        }

        public void showData () {
            Console.WriteLine ("Key number {0} has the value of {1}", this.key, this.value);
        }
    }

}