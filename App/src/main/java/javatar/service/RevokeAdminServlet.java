package javatar.service;

import javatar.model.GlobalUser;
import javatar.web.GlobalUserService;
import javatar.web.SessionData;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import javax.ejb.EJB;
import javax.inject.Inject;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;

@WebServlet(urlPatterns = "/revokeAdmin")
public class RevokeAdminServlet extends HttpServlet {

    private static final Logger LOGGER = LoggerFactory.getLogger(RevokeAdminServlet.class);

    @EJB
    GlobalUserService globalUserService;

    @Inject
    SessionData sessionData;

    @Override
    protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
        LOGGER.debug("Revoke admin rights");

        String userId = req.getParameter("userId");
        if (Validation.isInteger(userId)) {
            long id = Long.parseLong(userId);
            LOGGER.debug("Id is valid. Updating user. ID: ", id);
            GlobalUser user = globalUserService.getUserById(id);
            user.setAdministrator(0);
            globalUserService.updateUser(user);
            if (sessionData.getUserId() == id) {
                sessionData.setIsAdmin(0);
                resp.sendRedirect("http://localhost:8080/jjdz-autoparts/");
            } else {
                resp.sendRedirect("usersList");
            }
        } else {
            LOGGER.debug("User ID is not numeric. ID: ", userId);
            resp.sendRedirect("http://localhost:8080/jjdz-autoparts/");
        }




    }

}
