package javatar.service;

import javatar.model.AllegroCategories;
import javatar.model.Autopart;
import javatar.model.AutopartAllegroListModel;
import javatar.model.AutopartCategory;
import org.junit.Before;
import org.junit.Test;

import java.io.InputStream;
import java.util.ArrayList;
import java.util.List;

import static org.hamcrest.CoreMatchers.equalTo;
import static org.hamcrest.CoreMatchers.is;
import static org.junit.Assert.*;

public class AllegroCategoryFinderTest {

    AllegroCategoryFinder allegroCategoryFinder = new AllegroCategoryFinder();
    AutopartAllegroListModel autopartAllegroListModel = new AutopartAllegroListModel();
    XMLParser xmlParser = new XMLParser();
    List<AllegroCategories> allegroCategoriesList = new ArrayList<>();

    @Before
    public void initialize() {
        InputStream allegroCategoriesFile = this.getClass().getResourceAsStream("/Allegro_cathegories_2016-02-13.xml");
        allegroCategoriesList = xmlParser.allegroCategoryObject(allegroCategoriesFile);
        autopartAllegroListModel.setAllegroCategories(allegroCategoriesList);
    }

    @Test
    public void test_match_3_categories() throws Exception {

        //given
        Autopart autopart = new Autopart();
        AutopartCategory categoryListElement = new AutopartCategory();
        categoryListElement.setName("Chłodzenie silnika");
        autopart.addCategoryToList(categoryListElement);
        AutopartCategory categoryListElement2 = new AutopartCategory();
        categoryListElement2.setName("Chłodnice");
        autopart.addCategoryToList(categoryListElement2);
        AutopartCategory categoryListElement3 = new AutopartCategory();
        categoryListElement3.setName("Chłodnice oleju");
        autopart.addCategoryToList(categoryListElement3);
        autopartAllegroListModel.setAutopart(autopart);
        //when

        String s = allegroCategoryFinder.matchCategories(autopartAllegroListModel);

        //then
        assertThat(s, is(equalTo("Chłodnice Chłodnice oleju;251083")));

    }

    @Test
    public void test_match_2_categories() throws Exception {

        //given
        Autopart autopart = new Autopart();
        AutopartCategory categoryListElement = new AutopartCategory();
        categoryListElement.setName("Części karoserii");
        autopart.addCategoryToList(categoryListElement);
        AutopartCategory categoryListElement2 = new AutopartCategory();
        categoryListElement2.setName("Maski");
        autopart.addCategoryToList(categoryListElement2);
        autopartAllegroListModel.setAutopart(autopart);

        //when
        String s = allegroCategoryFinder.matchCategories(autopartAllegroListModel);

        //then
       assertThat(s, is(equalTo("czesci samochodowe Części karoserii;4094")));
    }

    @Test
    public void test_does_not_match_category() throws Exception {

        //given
        Autopart autopart = new Autopart();
        autopartAllegroListModel.setAutopart(autopart);

        //when
        String s = allegroCategoryFinder.matchCategories(autopartAllegroListModel);

        //then
        assertThat(s, is(equalTo("czesci samochodowe 620")));
    }

    @Test
    public void test_matching_category_from_HashMap() {
        Autopart autopart = new Autopart();
        AutopartCategory categoryListElement = new AutopartCategory();
        categoryListElement.setName("Układ chłodzenia");
        autopart.addCategoryToList(categoryListElement);
        AutopartCategory categoryListElement2 = new AutopartCategory();
        categoryListElement2.setName("Chłodnice");
        autopart.addCategoryToList(categoryListElement2);
        autopartAllegroListModel.setAutopart(autopart);

        //when
        String s = allegroCategoryFinder.matchCategoryFromHashMap(autopartAllegroListModel);

        //then
        assertThat(s, is(equalTo("Chłodzenie silnika Chłodnice;18690")));

    }


}