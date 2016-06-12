package javatar.service;

import javatar.model.Car;
import javatar.model.CarsBrands;
import javatar.model.CarsEngineAndFuel;
import javatar.model.CarsModels;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.HashMap;
import java.util.List;
import java.util.Scanner;


public class CarIdentification {

    final String mainPath = "src/main/resources/json_data/";

    public CarIdentification() {
    }

    public Car FindingCarByAztecCodeAnswer(Car carIn) throws FileNotFoundException {


        CarsBrands carInBrand = carIn.getCarsBrand();
        CarsModels canInModel = carIn.getCarsModel();
        String carInEngineCapacity = carIn.getEngineCapacity();
        String carInFuelType = carIn.getFuelType();
        String carInEnginePower = carIn.getEnginePower();
        int carInProductionYear = carIn.getProductionYear();
        //CarsEngineAndFuel carInEngine =carIn.getEngine();
        CarsEngineAndFuel engineOut = new CarsEngineAndFuel();

        JsonParserBrands brands = new JsonParserBrands();
        String carOutId = brands.searchCarId(carInBrand.getName());
        JsonParserModels models = new JsonParserModels(mainPath + "/" + carOutId + ".json");
        String modelOutId = models.searchCarId(canInModel.getName(), carInProductionYear);
        JsonParserEngine engine = new JsonParserEngine(mainPath + "/" + modelOutId + ".json");
        List<CarsEngineAndFuel> carEnginesList = engine.searchEngineTypeByTokens(carInFuelType, carInEngineCapacity, carInEnginePower);


        if (carEnginesList.size() > 1) {
            System.out.println("Znaleziono " + carEnginesList.size() + " typy silników pasujące do danych zawartych w kodzie Aztek");
            System.out.println("Wybierz właściwy silnik i wprowadź jego numer");
            for (int i = 0; i < carEnginesList.size(); i++) {
                System.out.println(carEnginesList.get(i));
                i++;
            }
            Scanner scanner = new Scanner(System.in);
            int numberFromEnginesList = scanner.nextInt();
            engineOut = carEnginesList.get(numberFromEnginesList);

        } else {
            engineOut = carEnginesList.get(0);
        }

        carInBrand.setId(carOutId);
        canInModel.setId(modelOutId);
//        carInEngine.setId(engineOut.getId());
        carIn.setCarsBrand(carInBrand);
        carIn.setCarsModel(canInModel);
//        carIn.setEngine(carInEngine);
        carIn.setEngineID(engineOut.getId());
        System.out.println(carIn);

        return carIn;
    }

    public Car FindingCarManagement() throws IOException {
        String brand = new String();
        Scanner scanner = new Scanner(System.in);
        JsonParserBrands brandFileName = new JsonParserBrands();
        String brandFileNameOut = "Error";

        //------------------------------------------------------------------------------------------------------
        //Car brands section
        //------------------------------------------------------------------------------------------------------
        //while (brandFileNameOut == "Error") {
        System.out.println("Wprowadź nazwę marki lub wybierz z listy i wprowadź przyporządkowany jej numer:\r\n1. OPEL\r\n2. VOLKSWAGEN");
        String brandSelection = scanner.nextLine();

        if (brandSelection.length() == 1) {
            switch (brandSelection) {
                case "1":
                    brand = "OPEL";
                    break;
                case "2":
                    brand = "VOLKSWAGEN";
                    break;
                default:
                    brand = "Error";
                    break;
            }
        } else {
            brand = brandSelection;
        }


        brandFileNameOut = brandFileName.searchCarId(brand);
        // }

        //------------------------------------------------------------------------------------------------------
        //Car models section
        //------------------------------------------------------------------------------------------------------
        JsonParserModels modelId = new JsonParserModels(mainPath + brandFileNameOut + ".json");
        String modelPath = mainPath + brandFileNameOut;
        String modelFileNameOut = "Error";
        String model = new String();
        String year = new String();

        //while (modelFileNameOut == "Error") {
        System.out.println("Wprowadź nazwę modelu lub wybierz z listy i wprowadź przyporządkowany jej numer:\r\n1. ASTRA G kombi\r\n2. JETTA VII SportWagon");
        String modelSelection = scanner.nextLine();
        System.out.println("Wprowadź rok produkcji:");
        year = scanner.nextLine();


        if (modelSelection.length() == 1) {
            switch (modelSelection) {
                case "1":
                    model = "ASTRA G kombi";
                    break;
                case "2":
                    model = "JETTA VII SportWagon";
                    break;
                default:
                    model = "Error";
                    break;
            }
        } else {
            model = modelSelection;
        }

        modelFileNameOut = modelId.searchCarId(model, Integer.parseInt(year));
        // }
        //------------------------------------------------------------------------------------------------------
        //CEngines and fuel section
        //------------------------------------------------------------------------------------------------------
        String engineFileNameOut = "Error";
        final JsonParserEngine engine = new JsonParserEngine(mainPath + modelFileNameOut + ".json");

        while (engineFileNameOut == "Error") {

            System.out.println("Wpisz numer przyporządkowany właściwemu silnikowi:");

            HashMap<Integer, String> engineIdsMap = engine.listAllEngineTypes();
            String engineSelection = scanner.nextLine();
//
//            while (Integer.parseInt(engineSelection) > (engineIdsMap.size() - 1) || Integer.parseInt(engineSelection) < 0) {
//                System.out.println("Wpisz numer przyporządkowany właściwemu silnikowi:");
//                engineSelection = scanner.nextLine();
//            }

            engineFileNameOut = engineIdsMap.get(Integer.parseInt(engineSelection));
        }

        JsonParserEngine engine1 = new JsonParserEngine(mainPath + modelFileNameOut + ".json");
        //TODO dopytaj dlaczego nie możesz tu skorzystać z engine
        String engineName = engine1.searchEngineTypeByNumber(engineFileNameOut);


        Car car = new Car();
        car.setCarsBrand(new CarsBrands(brandFileNameOut, brand));
        car.setCarsModel(new CarsModels(modelFileNameOut, model));
//        car.setBrandName(brand);
//        car.setBrandId(brandFileNameOut);
//        car.setModelId(modelFileNameOut);
//        car.setModelName(model);
        car.setProductionYear(Integer.parseInt(year));
        car.setTypeId(engineFileNameOut);
        car.setTypeName(engineName);

        System.out.println(car);

        return car;
    }
}







