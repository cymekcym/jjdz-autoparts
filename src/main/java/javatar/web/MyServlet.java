package javatar.web;

import javatar.service.FindingCarInJsonService;

import javax.ejb.EJB;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;

@WebServlet(urlPatterns = "/MyServlet")
public class MyServlet extends HttpServlet {

    @EJB
    FindingCarInJsonService service;

    @Override
    protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {

        String optionString = req.getParameter("your_option");

        Integer option = 0;
        if (optionString != null && optionString.matches("[0-9]*")) {
            option = Integer.valueOf(optionString);
        }


        req.setAttribute("option", option);

        RequestDispatcher dispatcher = req.getRequestDispatcher("output.jsp");
        dispatcher.forward(req, resp);
    }
}