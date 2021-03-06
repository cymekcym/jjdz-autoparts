package reports.searched.part;

import org.slf4j.LoggerFactory;
import reports.searched.part.model.DataSavedToDB;
import reports.searched.part.model.DataSavedToDBBuilder;
import reports.searched.part.model.PartForReportDTOBuilder;
import reports.searched.part.model.PartForReportModule;

import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

@Stateless
public class StorePart {

    @PersistenceContext
    EntityManager em;

    private static final org.slf4j.Logger LOGGER = LoggerFactory.getLogger(StorePart.class);

    public Long save(PartForReportModule part) {

        DataSavedToDB data = new DataSavedToDBBuilder()
                .setDateTime(part.getDateTime())
                .setUserId(part.getUserId())
                .setUserName(part.getUserName())
                .setWeight(part.getWeight())
                .setPartDTO(new PartForReportDTOBuilder()
                        .setPartBrand(part.getPartBrand())
                        .setPartId(part.getPartId())
                        .setPartName(part.getPartName())
                        .setCarBrand(part.getCarBrand())
                        .setCarEngine(part.getCarEngine())
                        .setCarModel(part.getCarModel())
                        .build()
                )
                .build();
        LOGGER.info("data = {}", data.toString());

        em.persist(data);
        LOGGER.info("Data is saved");
        return data.getId();
    }

}
