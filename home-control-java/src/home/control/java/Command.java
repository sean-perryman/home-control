/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package home.control.java;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;

/**
 *
 * @author seanperryman
 */
public class Command {
  public static String sendCommand( String ip, int port, String cmd ) {
    try {
        Socket sock = new Socket(ip, port);

        PrintWriter out = new PrintWriter(sock.getOutputStream(), true);
        BufferedReader in = new BufferedReader(new InputStreamReader(sock.getInputStream()));

        out.println(cmd);
        String res = in.readLine();
        System.out.println(res);

        out.close();
        in.close();
        sock.close();

        return res;
        //return "Command successful.";

    } catch (IOException e) {
        e.printStackTrace();
    }
    return "Failed to send command.";
};
}
